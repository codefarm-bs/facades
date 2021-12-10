@component('mail::message')
# Ticket:

<p> {{ $message  }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
