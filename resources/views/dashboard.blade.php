{{-- @extends('layout')

@section('content') --}}

    @if (count($hostels)==0)
        <h5>No Data available</h5>
        
    @endif
    @foreach ($hostels as $hostel)

    <a href="/hostel/{{$hostel->id}}"><h1> {{$hostel->id}}. {{$hostel->hostelName}}</h1> </a> 
    <h4>{{$hostel->address}}</h4>
    @endforeach
{{-- @endsection --}}
