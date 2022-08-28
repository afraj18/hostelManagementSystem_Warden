{{-- @extends('layout')

@section('content') --}}

    @if (count($hostels)==0)
        <h5>No Data available</h5>
        
    @endif
    @foreach ($hostels as $hostel)

    <a href="/hostel/{{$hostel->id}}"><h1> {{$hostel->id}}. {{$hostel->hostel_name}}</h1> </a> 
    <address> Address : {{$hostel->address}}
        </address>
    <br> Gender :  {{$hostel->type}}
    @endforeach
{{-- @endsection --}}
