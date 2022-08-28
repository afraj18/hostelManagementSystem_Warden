
@extends('layout')

@section('content')
<h1>{{$hostels->hostel_name}}</h1>
<p>Address : {{$hostels->address}}<br>
{{-- Room Capacity :  {{$hostels->capacity}} <br> --}}
Total rooms : {{$hostels->no_room}}
<br>
Hostel Type :  {{$hostels->type}}
<br>
Contact No :  {{$hostels->contact_no}}

</p>
@endsection