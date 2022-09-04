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

{{-- <h2>{{$student[0]->reg_no}}</h2>
<h2>{{$student[0]->hostel}}</h2>
<h2>{{$student[0]->room_no}}</h2>
<h2>{{$student[0]->bed_no}}</h2>

<h2>{{$student[0]->year}}</h2> --}}
<br><h4 style="text-align: center; ">Current Details</h4><br>
<div class="form-row ml-2 mr-2" id="studentHostelDetais">
    <div class="col-7">
      <input type="text" class="form-control" placeholder=" Hostel name" value="{{$student[0]->hostel}}" disabled>
<br>
      <input type="text" class="form-control" placeholder="Hostel type" value="{{$student[0]->gender}}" disabled>
<br>
      <input type="text" class="form-control" placeholder="Room No." value="{{$student[0]->room_no}}" disabled>
<br>
      <input type="text" class="form-control" placeholder="Bed No." value="{{$student[0]->bed_no}}" disabled>
    </div>
  </div>
  <br><h2 style="text-align: center;">To</h2><br><br> 


  <table class="table ">
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
              <option>Kadella</option>
              <option>Hanthana</option>
            </select>
          </div>
        </td>

        <td>
          <div class="mb-6">
            <select id="disabledSelect" class="form-select" >
              <option>Select Hostel Type</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
        </td>

        <td><input type="number" id="roomQuantity" name="quantity" min="1" max=" "></td>
        <td><input type="number" id="bedQuantity" name="quantity" min="1" max=" "></td>
        
      </tr>
      
    </tbody>

  </table>

 <div style="text-align: center;" class="d-grid gap-2">
  <button class="btn btn-secondary text-center" type="button">Change</button>


  