@component('mail::message')
# ConfirmBloodGroup

Dear {{$name}}   
Thank you for taking your time to donate blood and save a life.
Kindly Confirm That ,Your Blood Group is {{ $blood_group }}

@component('mail::button', ['url' => 'http://localhost:8000/bloodConfirmation'])
Confirm Blood Group
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
