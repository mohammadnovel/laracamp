@component('mail::message')
# Welcome!

Hi, {{$user->name}}
<br>
Welcome to laracamp, your account has successfully registered on laracamp!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
