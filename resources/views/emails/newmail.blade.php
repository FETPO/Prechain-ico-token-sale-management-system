@component('mail::message')
# {{ $demo->greeting }}

{!! $demo->message !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
