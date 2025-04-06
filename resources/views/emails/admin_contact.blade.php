<h3>Nuevo mensaje desde la página de contacto de {{ config('app.name') }}</h3>

<p>¡Hola equipo!</p>

<p>Han recibido un nuevo mensaje desde el formulario de contacto del sitio web de {{ config('app.name') }}. Aquí están los detalles:</p>

<h3>Información del Mensaje</h3>
<p><strong>Nombre:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Teléfono:</strong> {{ $phone }}</p>
<p><strong>Mensaje:</strong> {{ $message }}</p>

<p>No olviden revisar y dar seguimiento a esta solicitud.</p>

<p>Saludos,</p>
<p><strong>Sistema de Notificaciones {{ config('app.name') }}</strong></p>
