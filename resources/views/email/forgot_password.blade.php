Hello {{ $user->name }},

<br>

Your new login password :- <b> {{ $user->password_random }} </b>

<br>
Thank You, <br>

{{ config('app.name') }}