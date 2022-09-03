{{-- @extends('layout')

@section('content') --}}

    {{-- @if (count($hostels)==0)
        <h5>No Data available</h5>
        
    @endif
    @foreach ($hostels as $hostel)

    <a href="/hostel/{{$hostel->id}}"><h1> {{$hostel->id}}. {{$hostel->hostel_name}}</h1> </a> 
    <address> Address : {{$hostel->address}}
        </address>
    <br> Gender :  {{$hostel->type}}
    @endforeach --}}
{{-- @endsection --}}

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/bg.jpg" alt="uva_wellassa_university.jpg">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="navbarlogo">
              <p>Welcome to Student Accomodation Portal!</p>
              <!-- <div class="user_option "> -->
                <div class="user_option ">
                <a href="/addHostel" class="order_online ">
                  Add New Hostel
                </a>
              </div>
              <!-- </div> -->
            </span>
          </a>
            
        </nav>
        
        
      </div>
      
    </header>
    <!-- end header section -->
    
  </div>

  <!-- food section -->
  <section class="layout_padding ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hostels
        </h2>
          {{-- {{$hostels}} --}}
        <p>
          for students of Uva wellassa university
        <p>
      </div>
      
      <div class="justify-content-md-center ">
        <div class="container-student col-md-12 bg-light border border-secondary ">

        <!--table div started-->
        <div>
          <br><br>
          <div class="container">       
            <table class="table table-striped  table-bordered ">
              <thead>
              
                <tr>
                  <th>#</th>
                  <th>Hostel Name</th>
                  <th>level of hostel</th>
                  <th>Hostel type</th>
                  <th>Room count</th>
                  <th>Beds per a room</th>
                  <th>Hostel address</th>
                  <th>Contact number</th>
                </tr>
              </thead>
              <tbody>
                @if (count($hostels)==0)
                <h5 style="color:black">No Data available</h5>
                @endif
                @foreach ($hostels as $hostel)
                <tr>
                    <td>{{$hostel->id}}</td>
                    <td>{{$hostel->hostel_name}}</td>
                    <td>{{$hostel->level}}</td>
                    <td>{{$hostel->type}}</td>
                    <td>{{$hostel->no_room}}</td>
                    <td>{{$hostel->room_capacity}}</td>
                    <td>{{$hostel->address}}</td>
                    <td>{{$hostel->contact_no}}</td>
                  </tr>

                @endforeach
                {{-- <tr>
                  <td>1</td>
                  <td>Bluesapphire</td>
                  <td>Girls</td>
                  <td>100</td>
                  <td>2</td>
                  <td>Bluesapphire hostel, Uva wellassa university</td>
                  <td>0123456789</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Silvertips</td>
                  <td>Girls</td>
                  <td>100</td>
                  <td>2</td>
                  <td>Silvertips hostel, Uva wellassa university</td>
                  <td>0123456789</td>
                </tr> --}}
                
              </tbody>
            </table>
          </div>
        </div>
        <!--table div end-->
        

      </div>
    <!-- </div>

    <div class="user_option appealbutton">
     <a href="" class="order_online">
        VIEW HOSTELS
      </a>
    </div> -->
   
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
