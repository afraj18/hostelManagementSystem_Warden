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

  <style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }
    
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height:auto;
      overflow: auto;
      
    }
    
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }
     
    .sidebar a.active {
     
      color: white;
    }
    
    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }
    
    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
    }
    
    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }

    #rcorners2 {
  border-radius: 25px;
  border: 2px solid #001031;
  padding: 20px; 
  width: 200px;
  height: 75px; 
  text-align: center;
}

#rcorners3 {
  border-radius: 25px;
  border: 2px solid #001031;
  padding: 20px; 
  width: 100px;
  height: 60px; 
  text-align: center;

}


    </style>

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/bg.jpg" alt="uva_wellassa_university.jpg">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container ">
        
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/unilogo.png" alt="uva_wellassa_university.jpg" class="navbarlogo">
            </span>
          </a>
            <H1 style="color: beige; text-align: center;">ADMIN DASHBOARD</H1>
        </nav>
        
      </div>
      
    </header>
    <!-- end header section -->
  </div>



  <!-- food section -->

 

    <div class="container-fluid">
      
        <div class="sidebar flex-nowrap bg-secondary">
          <div class="col-autot">
            <nav class="navbar navbar-dark">
              
             
              <div class="navbar-nav w-100">
                  <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Assign Hostel</a> 
              </div>
              <div class="navbar-nav w-100">
                <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Assign Hostels</a> 
              </div>
              <div class="navbar-nav w-100">
              <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>View Appeals</a> 
             </div>
            <div class="navbar-nav w-100">
           <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Change Hostels</a> 
             </div>
             <div class="navbar-nav w-100">
            <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Manage Subwardens</a> 
              </div>
              <div class="navbar-nav w-100">
                <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>SIGN_OUT</a> 
                  </div>
          </nav>
           
        
      </div>
    </div>
  </div>
<br>
  <div class="content">
    <div class="col-autot">
     
    <div class="row">
      <div class="col">
       
      </div>
      <div class="col">
        <h5 id="rcorners2">Total Students</h5>
        <h5 id="rcorners3">100</h5>
        
      </div>
      <div class="col">
        
      </div>
       <div class="col">
        <h5 id="rcorners2">Hostels</h5>
        <h5 id="rcorners3">20</h5>
        
        </div>
        <div class="col">
         
        </div>
        <div class="col">
          <h5 id="rcorners2">Rooms</h5>
          <h5 id="rcorners3">150</h5>
        </div>

        <div class="col">
        
        </div>

      </div>
      
    
  </div>
      </div>
    </div>
        
   
  

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
  <script>let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");
  
    closeBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("open");
      menuBtnChange();//calling the function(optional)
    });
  
    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });
  
    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
     if(sidebar.classList.contains("open")){
       closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
     }else {
       closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
     }
    }</script>
  <!-- End Google Map -->

</body>

</html>