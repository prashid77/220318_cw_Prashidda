
<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css%22/%3E"/>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="../js/script.js"></script>
  

  

</head>
<body>
   
<!-- header section starts  -->
<section class="header">
    <a href="home.php" class="logo">HashTravel</a>
    <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
    <a href="#" id="lg-bag" onclick="toggleDropdown()">
            <i class="fas fa-user user"></i>
            <?php
            if (isset($_SESSION["username"])) {
                echo $_SESSION["username"];
            }
            ?>
        </a>
        <ul class="dropdown" id="loginDropdown">
            <?php
            if (isset($_SESSION["username"])) {
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
   
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</section>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/nepal-village.jpg) no-repeat center/cover;">
            <div class="content">
               <span>Embark on a journey of exploration</span>
               <h3>Journey with us to exciting destinations</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/R.jpg) no-repeat center/cover;">
            <div class="content">
               <span>Embark on a journey of exploration</span>
               <h3>Find Hidden Gems</h3>
               <a href="package.php" class="btn">Journey through a multitude of cultures</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/mustang-2.jpg) no-repeat center/cover;">
            <div class="content">
               <span>Embark on a journey of exploration</span>
               <h3>Make every moment of your tour count and leave a lasting impact </h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Our Services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Nepal-adventure.jpg" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/Nepal-Kathmandu-Valley-cr-getty.webp" alt="">
         <h3>Tour Guide</h3>
      </div>

      <div class="box">
         <img src="images/My1FSrUmRyOcrY0hahyG.jpg" alt="">
         <h3>Trekking</h3>
      </div>

      <div class="box">
         <img src="images/2015-05-12T150917Z_1061511661_GF10000092128_RTRMADP_3_QUAKE-NEPAL.webp" alt="">
         <h3>Camp Fire</h3>
      </div>

      <div class="box">
         <img src="images/off road.jpg" alt="">
         <h3>Off Road</h3>
      </div>

      <div class="box">
         <img src="images/b5194c956603ae16809611228e0dea8d.jpg" alt="">
         <h3>Camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->



<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Our Travel Bundles </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/OIP.jpg" alt="">
         </div>
         <div class="content">
            <h3>Adventurous Journeys</h3>
            <p>Experience the breathtaking beauty of Nepal. Explore majestic mountains, rich cultural heritage, and vibrant traditions.</p>
            <a href="book.php" class="btn">Lock in Your Experience</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/cae10584ce2fa3cc2324712fb0b2f45f.jpg" alt="">
         </div>
         <div class="content">
            <h3>Discover the Wonders of Nepal</h3>
            <p>Immerse yourself in the awe-inspiring landscapes, vibrant culture, and spiritual heritage of Nepal. Embark on thrilling adventures, trek through breathtaking mountain trails, and experience the warmth of Nepali hospitality.</p>
            <a href="book.php" class="btn">Lock in Your Experience</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/R (1).jpg" alt="">
         </div>
         <div class="content">
            <h3>Journey of Thrills</h3>
            <p>Experience the breathtaking beauty of Nepal. Explore majestic mountains, rich cultural heritage, and vibrant traditions.</p>
            <a href="book.php" class="btn">Lock in Your Experience</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">View More</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Up to 50% Off!</h3>
      <p>Experience the best of our travel adventures at unbeatable prices. Don't miss out on this limited-time offer!</p>
      <a href="book.php" class="btn">Lock in Your Experience</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Additional Links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
      </div>

      <div class="box">
         <h3>Ways to get in touch</h3>
         <a href="#"> <i class="fas fa-phone"></i> +977-9849594646 </a>
         <a href="#"> <i class="fas fa-phone"></i> 01-4386004 </a>
         <a href="#"> <i class="fas fa-envelope"></i> hashtravelnepal@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kathmandu, Nepal </a>
      </div>

      <div class="box">
         <h3>Stay In The Loop</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
      </div>

   </div>

   <div class="credit"> created by <span>Mr. Prashidda Poudel</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
   var swiper = new Swiper('.home-slider', {
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },
   });
</script>

</body>
</html>


<!-- custom js file link  -->
<script>function toggleDropdown() {
   const loginDropdown = document.getElementById("loginDropdown");
   loginDropdown.classList.toggle("show");
}

document.addEventListener("click", function(event) {
   const loginDropdown = document.getElementById("loginDropdown");
   const lgBag = document.getElementById("lg-bag");
   if (!lgBag.contains(event.target)) {
       loginDropdown.classList.remove("show");
   }
});
</script>
</body>
</html>
