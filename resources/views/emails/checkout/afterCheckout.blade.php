@component('mail::message')
# Booking Tour: {{$checkout->Tour->title}}

Hi , {{$checkout->User->name}}
<br>
Thank you for Booking  <b>{{$checkout->Tour->title}}</b>, please see payment instruction bu click the button below.

{{-- @component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)]) --}}
@component('mail::button', ['url' => route('dashboard')])
Check My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
