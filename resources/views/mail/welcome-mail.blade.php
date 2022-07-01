@component('mail::message')
# WelcomeMail

Dear {{$name}} 
 Account Has Successffully Been Created.Please Login Using Below Credentials
Email: {{$email}}
Password: {{$random_password}}

@component('mail::button', ['url' => 'http://localhost:8000/loginhospital'])
Login Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
