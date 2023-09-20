@component('mail::message')
{{$name}}

Your appointment has been booked at : {{$appointment}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
