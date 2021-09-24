<?php session_start(); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Movies</title>
    <link rel="stylesheet" href="home.css">
  </head>
  <body class="body">
    
    <header>
      <div class="container ">
          <!-- <a class="navbar-brand logo-1"  href="#"><img src="images/netflix-logo tr.png"  height="120" alt=""></a>   -->
          <a class="navbar-brand logo-2 "  href="#"><img src="images/N.png"  height="60" alt=""></a> 
          <img src="images/avatar.png" alt="Avatar" class="avatar">
      </div>  
   </header>

     <!----------------------------------------------------- User Model ------------------------------------------->

  <div class="container-fluid  d-flex justify-content-center align-items-center user">
    <div class="card_user">
        <div class="upper"> <img src="images/sub.jpg" class="img-fluid"> </div>
        <div class="user text-center">
            <div class="profile"> <img src="images/avatar.png" class="rounded-circle" width="80"> </div>
        </div>
        <div class="mt-5 text-center">
            <h4 class="mb-0 text-light"><?php   echo $_SESSION["username"] ;?></h4> <span class="text-light d-block mb-2"><?php   echo $_SESSION["email"] ;?></span> <a href="index.php"><button class="btn btn-danger btn-sm follow">Logout</button></a>
            
            <!-- <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                <div class="stats">
                    <h6 class="mb-0">Followers</h6> <span>8,797</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Projects</h6> <span>142</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Ranks</h6> <span>129</span>
                </div>
            </div> -->
        </div>
    </div>
</div>


   <!------------------------- Corousal -------------------------------->

   <div id="carouselExampleSlidesOnly" class="carousel slide "   data-bs-ride="carousel">
    <div class="carousel-inner " style="height: 40vh;"  >
      <div class="carousel-item active">
        <img src="images/banner2.jpg" class="d-block w-100"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banner2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banner2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
    

    <!------------------------- Title of the home -------------------------------->
   
   <!-- <div class="container my-5 text-white col-md-10  " style="position: absolute; top: 25%; left: 12.5%; " >
      <h1 style="color: rgb(255, 0, 0); font-family: Verdana, Geneva, Tahoma, sans-serif; font: size 2rem; font-weight: bold; ">Movies</h1>
      <p style=" font-family: Verdana, Geneva, Tahoma, sans-serif; font: size 2rem; font-weight: bold; ">Watch amazing Movies !</p>
     <p>Movies move us like nothing else can, whether they’re scary, funny, dramatic, romantic or anywhere in-between. So many titles, so much to experience. Watch now for free</p> -->
<!-- </div> -->
  

    <!------------------------- Cards -------------------------------->

   <div class="container ">
      <div class="row">
        <div class="container my-3 text-white">
          <h4>Trending</h4>
        </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img src="images/aa.jpg" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Project Power</h5>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img src="images/bb.jpg" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Tripes of Europa</h5>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img src="images/cc.jpg" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Extraction</h5>
                    </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card mb-3">
                    <img src="images/dd.jpg" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Discover Die</h5>
                    </div>
                  </div>
              </div>
      </div>     
   </div>

   <div class="container my-3 text-white">
    <h4>Action</h4>
  </div>

   <!------------------------- Cards 2-------------------------------->

  <div class="container ">
     <div class="row">
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/ee.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">The Beast</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/ff.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Hold the Dark</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/gg.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">The last Day of American Crime</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/hh.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Lost Bullet</h5>
                   </div>
                 </div>
             </div>
     </div>     
  </div>

  <div class="container my-3 text-white">
    <h4>Hollywood</h4>
  </div>

   <!------------------------- Cards 3-------------------------------->

  <div class="container">
     <div class="row">
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/a.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Burn Out</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/b.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Fast and Furious 6</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/c.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">The Crew</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/d.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Asphalt burning</h5>
                   </div>
                 </div>
             </div>
     </div>     
  </div>

  <div class="container my-3 text-white">
    <h4>Adventure</h4>
  </div>

   <!------------------------- Cards 4-------------------------------->

  <div class="container">
     <div class="row">
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/e.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Santana</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/f.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Dirt</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/j.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Fast and furious 5</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/h.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Fast and furious 7</h5>
                   </div>
                 </div>
             </div>
     </div>     
  </div>

  <div class="container my-3 text-white">
    <h4>Comedy</h4>
  </div>

   <!------------------------- Cards 5-------------------------------->

  <div class="container">
     <div class="row">
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/aaa.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">American Gangesters</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/bbb.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Zodiac</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/ccc.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Papillon</h5>
                   </div>
                 </div>
             </div>
             <div class="col-md-3">
               <div class="card mb-3">
                   <img src="images/ddd.jpg" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">All the Money in the world</h5>
                   </div>
                 </div>
             </div>
     </div>     
  </div>
  <!-- join us  -->
  
  <!-- <div class="waiting">
    <p class="ready">Ready to watch? Enter your email to create or restart your membership</p>
    <nav class="navbar navbar-light bg-transparent" >
      <div class="container-fluid">
        <form class="d-flex">
          <input required class="form-control me-2" type="Email" placeholder="Email Adress" aria-label="Search">
          <button class="btn btn-danger" type="submit"><a href="signin.html" style="text-decoration: none;color: white;">Get Started</a></button>
        </form>
      </div>
    </nav>
  </div>
  -->

  <!----------------------------------------------------- Video Model ------------------------------------------->
  <div class="model-box"> 
    <div class="video-1  col-md-12 col-lg-12">
    <button type="button" class="btn-close" data-bs-dismiss="modal" style="color:white" aria-label="Close"></button>
      <i style="position: absolute; left: 3rem; top: 3rem; font-size: 2rem; color: rgba(255, 242, 242, 0.808);" class="icon ion-md-close mod"></i>
      <video class="video" controls width="100%"height="350"frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"loop autoplay, allowfullscreen >
        <source src="add.mp4" type="video/mp4">
      </video>
     
    </div>
  </div> 

  

   <!--------------------------------------------- Footer -------------------------------------->
   <footer>
    <div class="container">
      <h4>Questions? Contact Us</h4>
      <div class="row">
        <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3 section">
            <p>FAQ</p>
            <p>Investor Relations</p>
            <p>Privacy</p>
            <p>Speed Test</p>
        </div>
        <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3 section">
          <p>Help Center</p>
          <p>Jobs</p>
          <p>Cookie Preferences</p>
          <p>Legal Notices</p>
       </div>
       <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3 section">
        <p>Account</p>
        <p>Way to Watch</p>
        <p>Corporate Information</p>
        <p>Netflix Originals</p>
      </div>
      <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3 section">
        <p>Media</p>
        <p>Terms oF use</p>
        <p>Contact Us</p>
        <p>@copy  Netflix SO| 2021 | all rights reserved</p>
        
      </div>

      </div>
    </div>
  </footer>


  <!-- PHP Section -->

<?php include 'includes/db.php'; ?>


<?php  


$query = "SELECT  * FROM  users WHERE email = '$email' ";


$retrieve_result = mysqli_query($connection,$query) ;


if(!$retrieve_result){

  echo "<h1>Something Wrong</h1>" ; 
}else{

  echo "<h1>There we go</h1>" ; 
} 

while($raw = mysqli_fetch_array($retrieve_result)){

  $db_email = $raw['email'];
  $db_password= $raw['password'];
}


  


?>
 
  

   <script src="netflix.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>












  