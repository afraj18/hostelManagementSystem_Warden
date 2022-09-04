<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/unilogoheader.png" type="">

  <title> Hostel Management System of UWU </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<br><h4 style="text-align: center; ">Current Details</h4>
<div class="form-row ml-2 mr-2 " style="justify-content: center" id="studentHostelDetais">
    <div class="col-7">
      <form action="/updateStudent" method="POST">
        @csrf
        <label for="" class="m-1"> Name : </label>
        <input type="text" class="form-control" placeholder="name" name="name" value="{{$student[0]->first_name }} {{$student[0]->last_name}}" disabled>
        <label for="" class="m-1">Registration Number : </label>
        <input type="text" class="form-control" name="reg_no" placeholder=" Registration number" value="{{$student[0]->reg_no}}" disabled>
        <label for="" class="m-1">Email address : </label>
        <input type="text" class="form-control" name="email" placeholder=" Registration number" value="{{$student[0]->email}}" >
        {{-- <label for="" class="m-1">Hostel Name : </label>
        <input type="text" class="form-control" placeholder=" Hostel name" value="{{$student[0]->hostel}}" > --}}
        <label for="" class="m-1">Hostel Name : </label>
        <br><div class="mb-6">
          <select id="disabledSelect" name="hostel" class="form-select" >
            <option>{{$student[0]->hostel}}</option>
            @foreach ($hostels as $hostel)
            <option value="{{$hostel->hostel_name}}">{{$hostel->hostel_name}}</option>                
            @endforeach
          </select>
        </div>
        <label for="" class="m-1">Room number : </label>
        <input type="text" class="form-control" placeholder="Room No." name="room_no" value="{{$student[0]->room_no}}" >
        <label for="" class="m-1">Bed number : </label>
        <input type="text" class="form-control" placeholder="Bed No." name="bed_no" value=" {{$student[0]->bed_no}}" >
        <br>
        <div style="text-align: center;" class="d-grid gap-2">
          <button class="btn btn-secondary text-center col-11" type="submit">Change</button>
      </form>
    
    </div>
  </div>
  {{-- <br><h2 style="text-align: center;">To</h2><br><br>  --}}


  {{-- <table class="table ml-5 mr-5">
    <thead>
      <tr>
        <th><label for="validationTextarea" class="form-label">New Hostel Name</label></th>
        <th><label for="validationTextarea" class="form-label">Hostel type</label></th>
        <th><label for="validationTextarea" class="form-label">Room No.</label></th>
        <th><label for="validationTextarea" class="form-label">Bed No.</label></th>
      </tr>
    </thead>

    <tbody>
      <tr>
        
        <td>
          <div class="mb-6">
            <select id="disabledSelect" class="form-select" >
              <option>Select Hostel Name</option>
              @foreach ($hostels as $hostel)
              <option value="{{$hostel->hostel_name}}">{{$hostel->hostel_name}}</option>                
              @endforeach

            </select>
          </div>
        </td>

        <td>
          <div class="mb-6">
            <select id="disabledSelect" class="form-select" >
              <option>Select Hostel Type</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </td>

        <td><input type="number" id="roomQuantity" name="quantity" min="1" max=" "></td>
        <td><input type="number" id="bedQuantity" name="quantity" min="1" max=" "></td>
        
      </tr>
      
    </tbody>

  </table> --}}

 


  