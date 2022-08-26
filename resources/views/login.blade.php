@extends('layout')

@section('content')
    <!-- end header section -->
    <div class="container">
        <div class="loginbg">
            <div class="container_login">
                <div class="row">
                <div class="col-md-12">
                    <div class="login_form">
                    <h2>Log In</h2>
                    <form action="login.php" method="post">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                        </div>
                        <button type="submit" class="login-btn">Log In</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section -->
    
    <!-- end slider section -->
  </div>

  

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Adminstration
            </h4>
            <div class="contact_link_box">
              <i class="fa fa-user-circle-o"></i>
              <h6>Male  -Warden</h6>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              <h6>Male - Sub Wardens</h6>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              <i class="fa fa-user-circle-o"></i>
              <h6>Female - Warden</h6>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              <h6>Female - Sub Wardens</h6>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              <a href="tel:123-456-7890">
                <p class="wardencontact">
                  Name +94 77 34 45 234
                </p>
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="contact_link_box">
            <a href="" class="footer-logo">
              <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="footerunilogo">
            </a>
            <h2>
              Hostel Management System
            </h2>
            <p>
              This is a catelogue of hostel facilites available at Uva Wellassa University of Srilanka
            </p>
            <div class="footer_social">
              <p>Go to  VLE </p>
              <a href="https://vle.uwu.ac.lk/">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
              </a>
            </div>
            <div class="footer_social">
              <p>Go to University Website</p>
              <a href="https://www.uwu.ac.lk/">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Open Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            For Boys - 06.00 am to 10.00 pm
          </p>
          <p>
            For Girls - 06.00 am to 07.30 pm
          </p>
        </div>
      </div>
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