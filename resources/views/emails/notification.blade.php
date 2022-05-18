@component('mail::message')
# Hello {{ $recipient}},

{!! $body !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
