@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}.

<br>
Your transaction has been confirmed, now you can enjoy the benefit of <b>{{$checkcout->Camp->title}}</b>, and enjoy your Healing.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
