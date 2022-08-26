@extends('layout')

@section('content') 

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

<body class="sub_page">

  {{-- <div class="hero_area">
    <div class="bg-box">
      <img src="images/bg.jpg" alt="uva_wellassa_university.jpg">
    </div> --}}
    <!-- header section strats -->
    {{-- <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="navbarlogo"> 
              <p>Welcome to Student Accomodation Portal!</p>
              <!-- <div class="user_option "> -->
               
              <!-- </div> -->
            </span>
          </a>
          <div class="user_option text-right ">
            <a href="" class="order_online ">
              Go to Dashboard
            </a>
          </div>
            
        </nav>
        
        
      </div>
      
    </header> --}}
    <!-- end header section -->
    
  </div>

  <!-- food section -->
 

  <section class="layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hostel Information
        </h2>
        <p>
          for students of Uva wellassa university
        <p>
      </div>
      
      <div class="justify-content-md-center ">
        <div class="container-student col-md-12 bg-secondary ">
        <!--Div 1 started-->
        <div class="row">
          
            
          <!-- DropDown Started -->

          <div class="col">
            <div class="dropdown">
              <br>
              <button class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hostel Name
              </button>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Blueapphire</a>
                <a class="dropdown-item" href="#">Catelia</a>
                <a class="dropdown-item" href="#">Kedella</a>
              </div>
              
            </div> 
          </div>
        
          <!-- DropDown End -->

          <!-- form-check started -->
          <div class="col">
            
          </div>
          <!-- form-check End -->
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>

          <div class="col">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
            <label class="form-check-label" for="flexCheckDefault">
              Available
            </label>
          </div> 
        </div>
          
        </div>
        <!--Div 1 end-->

        <!--table div started-->
        <div>
          <br><br>
          <table class="table table-bordered table-hover table-secondary ">

              <td class="table-active">Reg No.</td>
              <td class="table-active">Name</td>
              <td class="table-active">Gender</td>
              <td class="table-active">Year</td>
              <td class="table-active">Hostel</td>


            @foreach ($students as $student)
            <tr>
              <td>{{$student->reg_no}}</td>
              <td>{{$student->first_name}} {{$student->last_name}}</td>
              <td>{{$student->gender}}</td>
              <td>{{$student->year}} Year</td>
              <td>{{$student->hostel}}</td>
            </tr>

              
            @endforeach
            
            
          </table>
        </div>
        <!--table div end-->

        <div>
          <div class="container container-student col-md-6 bg-dark">
            
            
            <div class="row">
              <div class="col">
                Total Students: {{count($students)}}
              </div>
              <div class="col">
                Assigned:{{count($students)}}
              </div>
              <div class="col">
                
              </div>
              <div class="col">
                
              </div>
              <div class="col">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
   
   <div class="text-center">

    @if($errors->any())
    <br>
    <h5 style="color: red">File uploaded has some errors</h5>
    <ol>
    @foreach ($errors->all() as $error)
      <li> {{$error}}</li>
    @endforeach
    </ol>
    @endif
   </div>
    <div class="user_option appealbutton">
      <form  method="POST" action="{{route('import')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload only .csv</label>
          <input type="file" name="student_file" class="form-control-file" accept=".csv,.xlsx,.xls" id="exampleFormControlFile1" required>
        </div>
        <button type="submit" class ="order_online">Add Students</button>
      </form>

     {{-- <a href="" class="order_online">
        ADD STUDENTS
      </a> --}}
    </div>
   
  </section> 


  <!-- end food section -->

<!-- footer section -->
  <footer class="footer_admin">
    <div class="container">

      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Uva Wellassa University
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

@endsection