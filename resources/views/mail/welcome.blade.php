<x-mail::message>
# Welcome to {{ config('app.name') }}

We are excited to have you on board! Thank you for signing up with us.

Here are your account details:

- **Email:** {{ $user->email }}
- **Password:** {{ $user->password }}  <!-- Use a plain password or hashed password if appropriate -->

To get started, click the button below to access your dashboard:

<!-- <x-mail::button :url="'/dashboard'">
Access Dashboard
</x-mail::button> -->

If you have any questions, feel free to reach out to our support team.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
