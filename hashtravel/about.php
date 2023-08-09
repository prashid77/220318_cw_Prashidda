<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="js/script.js"></script>

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
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/R.jpg) no-repeat">
   <h1>About Us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/R (3).jpg" alt="">
   </div>

   <div class="content">
      <h3>Why We Stand Out</h3>
      <p>Experience the exceptional with our unparalleled service and attention to detail. We prioritize your satisfaction and go above and beyond to create unforgettable travel experiences.</p>
      <p>With our extensive knowledge and expertise, we ensure seamless journeys, from personalized itineraries to expert guides. Choose us for a remarkable adventure that exceeds your expectations.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Prime Destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Budget-friendly cost</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Round-the-clock guide assistance</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Customer Testimonials </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"I can't thank HashTravel enough for the incredible trip to Muktinath. The knowledgeable guides, breathtaking landscapes, and warm hospitality made our visit truly exceptional. The cultural immersion and trekking experience left a lasting impression. We'll definitely be back for more!"</p>
            <h3>Manish Gautam</h3>
            <span>Traveler</span>
            <img src="images/IMG_8690.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"Unforgettable Annapurna Base Camp journey with HashTravel. Highly recommended!"</p>
            <h3>Gopte Gurung</h3>
            <span>traveler</span>
            <img src="images/IMG_2229.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"My heart skipped a beat as I stood in the shadow of the mighty Himalayas. Thanks to HashTravel, I got to witness the awe-inspiring beauty of Everest Base Camp firsthand. It was an adventure that left me speechless and hungry for more!"</p>
            <h3>Fulmaya Kumari</h3>
            <span>traveler</span>
            <img src="images/IMG_2232.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"I can't thank HashTravel enough for the incredible trip to Muktinath. The knowledgeable guides, breathtaking landscapes, and warm hospitality made our visit truly exceptional. The cultural immersion and trekking experience left a lasting impression. We'll definitely be back for more!"</p>
            <h3>Manish Gautam</h3>
            <span>traveler</span>
            <img src="images/IMG_8690.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"Unforgettable Annapurna Base Camp journey with HashTravel. Highly recommended!"</p>
            <h3>Gopte Gurung</h3>
            <span>traveler</span>
            <img src="images/IMG_2229.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>"My heart skipped a beat as I stood in the shadow of the mighty Himalayas. Thanks to HashTravel, I got to witness the awe-inspiring beauty of Everest Base Camp firsthand. It was an adventure that left me speechless and hungry for more!"</p>
            <h3>Fulmaya Kumari</h3>
            <span>traveler</span>
            <img src="images/IMG_2232.jpg" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->





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

<!-- custom js file link  -->
<script src="js/script.js"></script>
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