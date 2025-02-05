<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Correo de prueba'}}</title>
</head>
<body style="margin: 0;padding: 0;background-color: #f4f4f4;font-family: Tahoma, sans-serif;">
    <div class="container" style="max-width: 600px;margin: auto;background-color: #ffffff;">
        <div class="header">
            {{-- <img src="{{$headerImage}}" style="max-width: 100%;height: auto;"> --}}
            una imagen de prueba del header
        </div>

        <div style="font-size:16px;font-weight:300;font-style:normal;padding:20px;position:relative;">
            {!!$generalContent!!}
        </div>

        <div class="footer" style="font-weight:300;font-style:normal;position:relative;height:240px;">
            <div style="padding-left:20px;padding-top:48px;font-size:12px;">
                <span id="contact" style="border-top:2px solid #cacaca;">9567178788</span>
            </div>
            {{-- <img src="{{footerImage}}" style="float: right;"> --}}
            una imagen de prueba del footer
        </div>
    </div>
</body>
</html>
