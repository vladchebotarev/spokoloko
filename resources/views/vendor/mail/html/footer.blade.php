<!-- WRAPPER -->
<!-- Set wrapper width (twice) -->
<table border="0" cellpadding="0" cellspacing="0" align="center"
       width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">

    <!-- SOCIAL NETWORKS -->
    <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="social-icons">
            <table
                    width="256" border="0" cellpadding="0" cellspacing="0" align="center"
                    style="border-collapse: collapse; border-spacing: 0; padding: 0;">
                <tr>

                    <!-- ICON 1 -->
                    <td align="center" valign="middle"
                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                        <a target="_blank"
                           href="https://www.facebook.com/spokoloko.club/"
                           style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                               alt="F" title="Facebook"
                                                               width="44" height="44"
                                                               src="https://res.cloudinary.com/spokoloko/image/upload/v1528123085/app/mail/facebook.png"></a>
                    </td>

                    <!-- ICON 2 -->
                    <td align="center" valign="middle"
                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                        <a target="_blank"
                           href="https://twitter.com/spokoloko_club"
                           style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                               alt="T" title="Twitter"
                                                               width="44" height="44"
                                                               src="https://res.cloudinary.com/spokoloko/image/upload/v1528123085/app/mail/twitter.png"></a>
                    </td>

                    <!-- ICON 3 -->
                    <td align="center" valign="middle"
                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                        <a target="_blank"
                           href="https://www.linkedin.com/company/18141644/"
                           style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                               alt="G" title="Google Plus"
                                                               width="44" height="44"
                                                               src="https://res.cloudinary.com/spokoloko/image/upload/v1528123085/app/mail/linkedin.png"></a>
                    </td>

                    <!-- ICON 4 -->
                    <td align="center" valign="middle"
                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                        <a target="_blank"
                           href="https://www.instagram.com/spokoloko.club/"
                           style="text-decoration: none;"><img border="0" vspace="0" hspace="0" style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                               alt="I" title="Instagram"
                                                               width="44" height="44"
                                                               src="https://res.cloudinary.com/spokoloko/image/upload/v1528123085/app/mail/instagram.png"></a>
                    </td>

                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #999999;
			font-family: sans-serif;" class="footer">

            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved. <br><a href="https://res.cloudinary.com/spokoloko/image/upload/v1528125324/docs/Terms-Of-Service-PL.pdf"
                                                     target="_blank"
                                                     style="text-decoration: underline; color: #999999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">Terms Of Service</a>

        </td>
    </tr>
</table>

{{--<tr>
    <td>
        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0">
            <tr>
                <td class="content-cell" align="center">
                    {{ Illuminate\Mail\Markdown::parse($slot) }}
                </td>
            </tr>
        </table>
    </td>
</tr>--}}
