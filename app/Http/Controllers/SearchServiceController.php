<?php

namespace App\Http\Controllers;

use App\City;
use App\EventType;
use App\VenueAmenity;
use App\VenueFeature;
use App\VenueRule;
use App\VenueStyle;
use App\VenueType;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchServiceController extends Controller
{
    //
    public function index($city_request)
    {

        $city = City::where('name', $city_request)->first();

        if ($city === null) {
            return abort(404);
        } else {

            $min_price = (Input::get('minPrice') != '') ? Input::get('minPrice') : 0;
            $max_price = (Input::get('maxPrice') != '') ? Input::get('maxPrice') : 10000;

            $venues_query = "SELECT DISTINCT v.name, v.url, v.street_address, v.price_hour*v.min_hours as min_price, v.min_hours, v.area, v.max_guests, vi.image_url FROM sl_venues v INNER JOIN sl_venue_images vi";

            $venues_query_cond = " WHERE v.city_id=$city->id
                                    AND v.price_hour*v.min_hours >= '$min_price'
                                    AND v.price_hour*v.min_hours <= '$max_price'
                                    AND vi.cover_on = 1";


            /*event type*/
            $current_event_type = Input::get('eventType');

            if ($current_event_type != '') {
                $venues_query .= " LEFT JOIN sl_venue_eventtypes vet ON (v.id=vet.venue_id) LEFT JOIN sl_eventtypes et ON (vet.event_type_id=et.id)";
                $venues_query_cond .= " AND et.name = '$current_event_type'";
            }

            /*area*/
            $current_area = Input::get('area');
            if ($current_area != '') {
                $venues_query_cond .= " AND v.area >= '$current_area'";
            }

            /*guests standing*/
            $current_guests_standing = Input::get('guests_standing');
            if ($current_guests_standing != '') {
                $venues_query_cond .= " AND v.max_guests_standing >= '$current_guests_standing'";
            }

            /*guests seating*/
            $current_guests_seating = Input::get('guests_seating');
            if ($current_guests_seating != '') {
                $venues_query_cond .= " AND v.max_guests_seating >= '$current_guests_seating'";
            }

            /*venue types*/
            if (Input::get('venue_types') != '') {
                $current_venue_types = Input::get('venue_types');

                $venues_query .= " LEFT JOIN sl_venuetypes vt ON (v.venue_type_id=vt.id)";
                $current_venue_types_sql_string = implode ( "' ,'" ,$current_venue_types);
                $venues_query_cond .= " AND vt.name IN ('$current_venue_types_sql_string')";
            } else {
                $current_venue_types = array();
            }

            /*venue amenities*/
            if (Input::get('amenities') != '') {
                $current_amenities = Input::get('amenities');

                $venues_query .= " LEFT JOIN sl_venue_venueamenities vva ON (v.id=vva.venue_id) LEFT JOIN sl_venueamenities va ON (vva.venue_amenity_id=va.id)";
                $current_amenities_sql_string = implode ( "' ,'" ,$current_amenities);
                $venues_query_cond .= " AND va.name IN ('$current_amenities_sql_string')";
            } else {
                $current_amenities = array();
            }

            /*venue rules*/
            if (Input::get('rules') != '') {
                $current_rules = Input::get('rules');

                $venues_query .= " LEFT JOIN sl_venue_venuerules vvr ON (v.id=vvr.venue_id) LEFT JOIN sl_venuerules vr ON (vvr.venue_rule_id=vr.id)";
                $current_rules_sql_string = implode ( "' ,'" ,$current_rules);
                $venues_query_cond .= " AND vr.name IN ('$current_rules_sql_string')";
            } else {
                $current_rules = array();
            }

            /*venue styles*/
            if (Input::get('styles') != '') {
                $current_styles = Input::get('styles');

                $venues_query .= " LEFT JOIN sl_venue_venuestyles vvs ON (v.id=vvs.venue_id) LEFT JOIN sl_venuestyles vs ON (vvs.venue_style_id=vs.id)";
                $current_styles_sql_string = implode ( "' ,'" ,$current_styles);
                $venues_query_cond .= " AND vs.name IN ('$current_styles_sql_string')";
            } else {
                $current_styles = array();
            }

            /*venue features*/
            if (Input::get('features') != '') {
                $current_features = Input::get('features');

                $venues_query .= " LEFT JOIN sl_venue_venuefeatures vvf ON (v.id=vvf.venue_id) LEFT JOIN sl_venuefeatures vf ON (vvf.venue_feature_id=vf.id)";
                $current_features_sql_string = implode ( "' ,'" ,$current_features);
                $venues_query_cond .= " AND vf.name IN ('$current_features_sql_string')";
            } else {
                $current_features = array();
            }

            //echo $venues_query . $venues_query_cond;
            $venues = DB::select($venues_query . $venues_query_cond);


            $cities = City::all();
            $eventTypes = EventType::all();
            $venueTypes = VenueType::all();
            $amenities = VenueAmenity::all();
            $rules = VenueRule::all();
            $styles = VenueStyle::all();
            $features = VenueFeature::all();



            $data = array(
                'current_city' => $city,
                'current_event_type' => $current_event_type,
                'current_area' => $current_area,
                'current_guests_standing' => $current_guests_standing,
                'current_guests_seating' => $current_guests_seating,
                'current_venue_types' => $current_venue_types,
                'current_amenities' => $current_amenities,
                'current_rules' => $current_rules,
                'current_features' => $current_features,
                'current_styles' => $current_styles,

                'min_price' => $min_price,
                'max_price' => $max_price,
                'cities' => $cities,
                'eventTypes' => $eventTypes,
                'venueTypes' => $venueTypes,
                'amenities' => $amenities,
                'rules' => $rules,
                'styles' => $styles,
                'features' => $features,

                'venues' => $venues,

            );

            //dump($data);
            return view('search-services', $data);

        }


    }
}
