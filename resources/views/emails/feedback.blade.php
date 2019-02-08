@component('mail::message')
# Hello,

The following feedback was received from {{$email}}
Message: {{$feedback}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
