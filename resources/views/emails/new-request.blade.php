{{--@component('mail::message')--}}
    <p>Tienes nueva solicitud:</p>
    <p>Nombre: {{ $name }}</p>
    <p>email: {{ $email }}</p>
    <p>asunto: {{ $subject_request }}</p>
    <p>mensaje: {{ $message_request }}</p>

    Thanks,<br>
    {{ config('app.name') }}
{{--@endcomponent--}}
