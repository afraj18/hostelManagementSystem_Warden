
@extends('layout')

@section('content')
<h1>{{$hostels->hostelName}}</h1>
<p>Address : {{$hostels->address}}<br>
{{-- Room Capacity :  {{$hostels->capacity}} <br> --}}
Hostel Type :  {{$hostels->type}}
</p>
@endsection