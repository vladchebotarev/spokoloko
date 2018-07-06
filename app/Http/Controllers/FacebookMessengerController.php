<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use pimax\FbBotApp;
use pimax\Messages\Message;
use pimax\Messages\MessageButton;
use pimax\Messages\SenderAction;
use pimax\Messages\StructuredMessage;

class FacebookMessengerController extends Controller
{
    private $bot;

    public function webhook_verify_token()
    {
        $local_verify_token = env('WEBHOOK_VERIFY_TOKEN');
        $hub_verify_token = Input::get('hub_verify_token');

        if ($local_verify_token != $hub_verify_token) {
            return "Bad verify token.";
        } else {
            echo Input::get('hub_challenge');
        }
    }

    public function webhook_handle_msg()
    {
        $input = Input::all();

        $this->bot = new FbBotApp(env('PAGE_ACCESS_TOKEN'));

        if (!empty($input['entry'][0]['messaging'])) {
            foreach ($input['entry'][0]['messaging'] as $message) {
                //Ignorujemy widomosci o dostawie
                if (!empty($message['delivery'])) {
                    continue;
                }

                $userID = $message['sender']['id'];
                $command = '';

                if (!empty($message['message'])) {
                    $command = $message['message']['text'];

                    $this->textMessageProcessing($command, $userID);
                    //$bot -> send($mes);
                } else if (!empty($message['postback'])) {
                    $command = $message['postback']['payload'];

                    switch ($command) {
                        case 'GET_STARTED':
                            $this->bot->send(new StructuredMessage($userID,
                                StructuredMessage::TYPE_BUTTON,
                                [
                                    'text' => 'Witaj w chatbocie Spokoloko! Jestem stworzony, aby pomóc Ciebie znaleźć odpowednij lokal na Twoje wydarzenie. Możesz mnie zapytać w stylu "Szukam salę na konfrencję" albo "Potrzebuje mejsca gdzie spędzić urodziny" albo wybrać pasującą opcję.',
                                    'buttons' => [
                                        new MessageButton(MessageButton::TYPE_POSTBACK, 'Sale konferencyjne', 'CONFERENCE'),
                                        new MessageButton(MessageButton::TYPE_POSTBACK, 'Sale ślubne', 'WEDDING'),
                                        new MessageButton(MessageButton::TYPE_POSTBACK, 'Customer Support', 'SUPPORT')
                                    ]
                                ]
                            ));
                            break;
                        case 'SUPPORT':

                            $this->bot->send(new StructuredMessage($userID,
                                StructuredMessage::TYPE_BUTTON,
                                [
                                    'text' => 'Dziękujemy za zgłoszenie się do Customer Support. Nasz konsultant wkrótce skontaktuje się z Tobą. Jeśli nie chcesz czekać, możesz zadzwonić już teraz.',
                                    'buttons' => [
                                        new MessageButton(MessageButton::TYPE_CALL, 'Zadzwoń', '731807173')
                                    ]
                                ]
                            ));

                            //$user = $bot->userProfile($userID);
                            //saveSender($userID, $user->getFirstName(), $user->getLastName());
                            //$bot -> send(new Message('100002251030517', 'Customer Support, odpisz do '.$user->getFirstName().' '.$user->getLastName()));
                            //$bot -> send(new Message('100006970837405', 'Customer Support, odpisz do '.$user->getFirstName().' '.$user->getLastName()));
                            break;
                        default:
                            //textMessageProcessing($message['postback']['title'], $userID);

                    }

                }

            }
        }
    }

    private function textMessageProcessing($input, $userID){

        if(strlen($input) > 255){
            $this->bot -> send(new StructuredMessage($userID,
                StructuredMessage::TYPE_BUTTON,
                [
                    'text' => 'Twoje pytanie jest za duże dla mnie! Spróbuj sprecyzować pytanie albo skontaktuj się z Customer Support.',
                    'buttons' => [
                        new MessageButton(MessageButton::TYPE_POSTBACK, 'Customer Support', 'SUPPORT')
                    ]
                ]));

        }else{
            $normalizedInput = $this->normalizingData($input);
            $levResult = $this->levensteinCheck($normalizedInput);
            $typeID = $levResult[0];
            $meetingType_tab = mysqli_fetch_assoc(mysqli_query($db, "SELECT name FROM sl_meeting_type WHERE id_meeting = $typeID AND id_lang=1;"));
            $meetingType = $meetingType_tab['name'];
            if($levResult[1] > 0.25){

                $this->bot -> send(new Message($userID, 'Szukam przestrzeni na wydarzenie typu: '.$meetingType));
                $this->bot -> send(new SenderAction($userID, SenderAction::ACTION_TYPING_ON));
                $venues = array();
                $venuesQuery = mysqli_query($db, "SELECT l.name, l.url, l.address, i.url as img_url FROM sl_local_meeting m 
                                                          LEFT JOIN sl_locals l ON (m.id_local = l.id_local) 
                                                          LEFT JOIN sl_local_image i ON (l.id_local = i.id_local) 
                                                          WHERE m.id_meeting = $typeID AND 
                                                          i.default_on = 1");
                $rowNum = mysqli_num_rows($venuesQuery);
                $bot -> send(new Message($userID, 'Udało mi się znaleźć '.$rowNum.' lokali na wydarzenie tego typu.'));
                if($rowNum > 0) {
                    $count = 0;
                    while ($venuesTab = mysqli_fetch_assoc($venuesQuery)) {
                        $venueName = str_replace('&amp;', '&', $venuesTab['name']);
                        array_push($venues,
                            new MessageElement($venueName, $venuesTab['address'] . ', Kraków' . ' | 200 zł/g, 1500 zł/d', "https://spokoloko.eu/img/locals_img/" . $venuesTab['img_url'], [
                                new MessageButton(MessageButton::TYPE_WEB, 'Rezerwuj teraz', 'https://spokoloko.eu/pl/lokal/' . $venuesTab['url'] . '/#contact-form'),
                                new MessageButton(MessageButton::TYPE_WEB, 'Zobacz na mapie', 'https://spokoloko.eu/pl/lokal/' . $venuesTab['url'] . '/#map', 'tall'),
                                new MessageButton(MessageButton::TYPE_WEB, 'Sprawdź szczegóły', 'https://spokoloko.eu/pl/lokal/' . $venuesTab['url'] . '/')
                            ], 'https://spokoloko.eu/pl/lokal/' . $venuesTab['url'] . '/')
                        );

                        $count++;
                        if($count == 9){
                            break;
                        }
                    }

                    if($rowNum > 9){
                        array_push($venues,
                            new MessageElement('Zobacz wszystkie '.$rowNum, 'Ceny mogą się zmieniać', "https://spokoloko.eu/img/krk.jpg", [
                                new MessageButton(MessageButton::TYPE_WEB, 'Zobacz wszystkie', "https://spokoloko.eu/pl/search/?type=".$typeID)
                            ], "https://spokoloko.eu/pl/search/?type=".$typeID));

                    }

                    $bot->send(new StructuredMessage($userID,
                        StructuredMessage::TYPE_GENERIC,
                        [
                            'elements' => $venues
                        ]
                    ));
                }else{

                }
            }else{
                $this->bot -> send(new StructuredMessage($userID,
                    StructuredMessage::TYPE_BUTTON,
                    [
                        'text' => 'Nie do końca rozumiem Twojego pytania. Spróbuj sprecyzować pytanie albo skontaktuj się z Customer Support. Możesz też skorzystać z pomocy naszych Venue Expert. Może miałeś na myśli: ',
                        'buttons' => [
                            new MessageButton(MessageButton::TYPE_POSTBACK, $meetingType, 'DEFAULT'),
                            new MessageButton(MessageButton::TYPE_WEB, 'Venue Expert', 'https://spokoloko.eu/pl/venue-expert/'),
                            new MessageButton(MessageButton::TYPE_POSTBACK, 'Customer Support', 'SUPPORT')
                        ]
                    ]));
            }

        }
    }

    private function levensteinCheck($input){
        global $config;
        $words = $config['feeds'];

        $shortest = -1;

        foreach ($words as $word => $typeId) {

            $lev = levenshtein($input, $word);

            if ($lev == 0) {

                $closest = $word;
                $meetingId = $typeId;
                $shortest = 0;
                $pct = 1;
                break;
            }

            if ($lev <= $shortest || $shortest < 0) {
                // set the closest match, and shortest distance
                $closest  = $word;
                $meetingId = $typeId;
                $shortest = $lev;
                $bigger = max(strlen($input), strlen($word));
                $pct = ($bigger - $shortest) / $bigger;
            }
        }
        return array($meetingId, $pct, $closest);

    }

    private function normalizingData ($string){
        $polish_chars_array = array(
            'Ą' => 'a',
            'Ć' => 'c',
            'Ę' => 'e',
            'Ś' => 's',
            'Ó' => 'o',
            'Ł' => 'l',
            'Ń' => 'n',
            'Ż' => 'z',
            'Ź' => 'z',
            'ą' => 'a',
            'ć' => 'c',
            'ę' => 'e',
            'ś' => 's',
            'ó' => 'o',
            'ł' => 'l',
            'ń' => 'n',
            'ż' => 'z',
            'ź' => 'z'
        );

        $stop_words = array(
            'CHCE',
            'CHCIALBYM',
            'POTRZEBUJE',
            'SZUKAM',
            'PLANUJE',
            'PLANUJEMY',
            'WYNAJAC',
            'SALA',
            'SALE',
            'SALI',
            'NA',
            'MY',
            'JA'
        );

        $string = strtr( $string, $polish_chars_array );
        $string = strtoupper($string);
        $string = preg_replace('/\b('.implode('|',$stop_words).')\b/','',$string);
        $string =  preg_replace('/[^a-z]+/i', '', $string);
        $string = str_replace(" +", "_", $string);

        return $string;
    }
}
