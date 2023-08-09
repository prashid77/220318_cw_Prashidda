<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
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

<div class="heading" style="background:url(images/BN_FB000043.jpg) no-repeat">
   <h1>Packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Our Travel Bundles</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/nepal-3381823_1280.jpg" alt="">
         </div>
         <div class="content">
            <h3>Adventurous Journeys</h3>
            <p>Experience the breathtaking beauty of Nepal. Explore majestic mountains, rich cultural heritage, and vibrant traditions.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/hok1gyz2s93tacuqf3np.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Discover the Wonders of Nepal</h3>
            <p>Immerse yourself in the awe-inspiring landscapes, vibrant culture, and spiritual heritage of Nepal. Embark on thrilling adventures, trek through breathtaking mountain trails, and experience the warmth of Nepali hospitality.</p>
            <a href="book.php" class="btn">Lock in Your Experience</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/People-trekking-in-Nepal.jpg" alt="">
         </div>
         <div class="content">
            <h3>Journey of Thrills</h3>
            <p>Experience the breathtaking beauty of Nepal. Explore majestic mountains, rich cultural heritage, and vibrant traditions.</p>
            <a href="book.php" class="btn">Secure Your Spot</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Slider-4-108-768x427.jpg" alt="">
         </div>
         <div class="content">
            <h3>Enchanting Escapades</h3>
            <p>Embark on a journey of wonder and discovery in Nepal. Encounter breathtaking landscapes, immerse yourself in diverse cultures, and create unforgettable memories.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Cultural-Tour-in-Nepal-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cultural Odyssey</h3>
            <p>Uncover the rich tapestry of Nepal's cultural heritage. Immerse yourself in ancient traditions, visit historic landmarks, and connect with the warm-hearted locals.</p>
            <a href="book.php" class="btn">Reserve Your Journey</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/MHT-6-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mountain Mystique</h3>
            <p>Embark on an awe-inspiring journey through Nepal's majestic mountains. Trek through scenic trails, witness breathtaking panoramas, and embrace the tranquility of the Himalayas.</p>
            <a href="book.php" class="btn">Secure Your Trek</a>
         </div>
      </div>
   

      <div class="box">
         <div class="image">
            <img src="images/g0042597.webp" alt="">
         </div>
         <div class="content">
            <h3>Adventure Unleashed</h3>
            <p>Unleash your inner adventurer in the thrilling landscapes of Nepal. Indulge in adrenaline-pumping activities, conquer challenging terrains, and create stories of a lifetime.</p>
            <a href="book.php" class="btn">Book Your Adventure</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/muktinath_temple_in_nepal.jpg" alt="">
         </div>
         <div class="content">
            <h3>Heritage & Nature</h3>
            <p>Experience the perfect blend of heritage and nature in Nepal. Immerse yourself in ancient sites, explore pristine national parks, and witness the incredible biodiversity.</p>
            <a href="book.php" class="btn">Explore and Reserve</a>
         </div>
      </div>
      

      <div class="box">
         <div class="image">
            <img src="images/dance-hippie-festival-dancing-spirit-young-peace-woman-female.jpg" alt="">
         </div>
         <div class="content">
            <h3>Spiritual Journey</h3>
            <p>Embark on a spiritual journey through Nepal's sacred destinations. Connect with ancient traditions, visit serene monasteries, and find inner peace amidst breathtaking landscapes.</p>
            <a href="book.php" class="btn">Reserve Your Spiritual Retreat</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/R (4).jpg" alt="">
         </div>
         <div class="content">
            <h3>Nepal Wildlife Encounter</h3>
            <p>Experience the incredible wildlife of Nepal. Discover diverse ecosystems, encounter exotic species, and embark on thrilling wildlife safaris.</p>
            <a href="book.php" class="btn">Book Your Wildlife Adventure</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/042de40697bb9bb540eacf679a3a74f3--nepali-food-india-food.jpg" alt="">
         </div>
         <div class="content">
            <h3>Culinary Delights</h3>
            <p>Embark on a gastronomic journey through the flavors of Nepal. Indulge in mouthwatering local cuisine, savor traditional recipes, and experience the vibrant culinary scene of Nepal.</p>
            <a href="book.php" class="btn">Book Your Culinary Adventure</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/13560673.DSC_0039_hut.jpg" alt="">
         </div>
         <div class="content">
            <h3>Rural Retreat</h3>
            <p>Escape to the tranquility of Nepal's rural landscapes. Immerse yourself in traditional village life, witness breathtaking natural beauty, and experience the warmth of rural Nepali hospitality.</p>
            <a href="book.php" class="btn">Secure Your Rural Getaway</a>
         </div>
      </div>
      
   </div>
   <div class="load-more"><span class="btn">View more</span></div>

 
  


</section>

<!-- packages section ends -->
















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


<script>
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
};

</script>

</body>
</html>