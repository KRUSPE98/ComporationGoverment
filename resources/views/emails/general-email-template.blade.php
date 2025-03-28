<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Correo de prueba'}}</title>
</head>
<body style="margin: 0;padding: 0;background-color: #f4f4f4;font-family: Tahoma, sans-serif;">
    <div class="container" style="max-width: 600px;margin: auto;background-color: #ffffff;">
        <div class="header" style="background:#15396D;height: 120px;text-align: center;border-bottom: 4px solid #F2F609;">
            <img src="{{asset('images/partials/nav/CGF-logo-white.png')}}" alt="cgf-logo" style="max-width: 100%;max-height: 100%;">
        </div>

        <div style="font-size:14px;font-weight:300;font-style:normal;padding:20px;position:relative;">
            {!!$generalContent!!}
        </div>

        <div class="footer" style="font-weight:300;font-style:normal;position:relative;border-bottom: 20px solid #6C1947;">
            <table role="presentation" style="width: 100%;padding: 20px 0; text-align: center;color:#c1c1c1">
                <tr>
                    <td style="padding: 10px;">
                        <p style="font-size: 12px;">
                            {{config('app.contacts.address')}} | {{config('app.contacts.phone')}} | {{config('app.contacts.email')}}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{asset('images/partials/nav/CGF-logo-new.png')}}" alt="cgf-logo" style="width: 180px;">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;">
                        <p style="font-size:12px">
                            Siguenos en:
                        </p>
                        <p style="font-size: 12px;">
                            <a href="{{config('app.urls.socialMedia.fb')}}" target="_blank" style="margin: 0 10px;text-decoration:none;">
                                <img src="{{asset('images/decorations/facebook-f-brands.png')}}" alt="Facebook" style="width: 16px; height: 22px;">
                            </a>
                            <a href="{{config('app.urls.socialMedia.ig')}}" target="_blank" style="margin: 0 10px;text-decoration:none;">
                                <img src="{{asset('images/decorations/instagram-brands.png')}}" alt="Instagram" style="width: 22px; height: 22px;">
                            </a>
                            <a href="{{config('app.urls.socialMedia.tt')}}" target="_blank" style="margin: 0 10px;text-decoration:none;">
                                <img src="{{asset('images/decorations/tiktok-brands.png')}}" alt="Instagram" style="width: 20px; height: 22px;">
                            </a>
                            <a href="{{config('app.urls.socialMedia.yt')}}" target="_blank" style="margin: 0 10px;text-decoration:none;">
                                <img src="{{asset('images/decorations/youtube-brands.png')}}" alt="Instagram" style="width: 26px; height: 24px;">
                            </a>
                        </p>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;">
                        <p style="font-size: 12px;">
                            <a href="http://www.miempresa.com/privacy" style="color:#c1c1c1;">Política de privacidad</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px;">
                        <p style="font-size: 12px;">
                            &copy; {{now()->year}} Todos los derechos reservados.
                        </p>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</body>
</html>
