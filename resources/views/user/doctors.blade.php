@foreach ($doctors as $doctor)

@if($doctor->accepted == 1)
__________________________<br>
Name : {{$doctor->first_name}} {{$doctor->last_name}}<br>
Hospital : {{$doctor->hospital}}<br>
specialization : {{$doctor->specialization}}<br>
__________________________<br>
@endif

@endforeach

