@component('mail::message')
# Affinos user registration

Hi {{$user->name . ' '. $user->last_name}} you have registered with Affinos successfully. please login with following details.
<p>Username: {{$user->email}}</p>
<p>Password: {{$password}}</p>

@component('mail::button', ['url' => url('/login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
