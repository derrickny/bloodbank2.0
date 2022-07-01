@component('mail::message')
# Points Conversion

Dear {{ $hospital_name }} ,
Patient with the name  {{$donor_name}} and Email {{ $donor_email }}  wants to convert the points to a hospital bill 
{{ $points_converted }} points = Kshs {{$points_converted}}.
If You Approve This Confirm Below

@component('mail::button', ['url' => 'http://localhost:8000/poitnsApproval'])
Approve Points Conversion
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
