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
                <a href="" class="order_online ">
                  Log Out
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
      <div class="heading_container heading_center ">
        <h2>
         Change the Hostel 
        </h2>
        <p>
          for students of Uva wellassa university
        <p>
      </div>
      
      <div class="justify-content-md-center ">
        <div class="container-student col-md-12 bg-light text-secondary border border-secondary ">

        <!--table div started-->
        <div>
          <h2 style="text-align: center;">From</h2><br><br>
          <form class="was-validated">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Enter student's e-mail" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Search</button>
              </div>
            </div>


            <div class="form-row" id="studentHostelDetais">
              <div class="col-7">
                <input type="text" class="form-control" placeholder=" Hostel name" disabled>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Hostel type" disabled>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Room No." disabled>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Bed No." disabled>
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
                        <option>Galaxy Hostel</option>
                        <option>Kadella</option>
                        <option>Hanthana</option>
                      </select>
                    </div>
                  </td>

                  <td>
                    <div class="mb-6">
                      <select id="disabledSelect" class="form-select" >
                        <option>Select Hostel Type</option>
                        <option>Boys</option>
                        <option>Girls</option>
                      </select>
                    </div>
                  </td>
    
                  <td><input type="number" id="roomQuantity" name="quantity" min="1" max=" "></td>
                  <td><input type="number" id="bedQuantity" name="quantity" min="1" max=" "></td>
                  
                </tr>
                
              </tbody>

            </table>
            <br>

           <br> 
           <div class="d-grid gap-2">
            <button class="btn btn-secondary" type="button">Change</button>
           
          </div>

          </form>
        </div>
        <!--table div end-->
      </div>
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