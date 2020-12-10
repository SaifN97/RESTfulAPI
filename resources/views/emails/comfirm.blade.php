@component('mail::message')
# Hello {{ $user->name }}

You changed you email, So we need to verify this new email address. Please use the button below:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Verify Account.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
