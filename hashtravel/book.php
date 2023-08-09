<?php
require_once "session.php";
?>
<?php

$db_name = 'mysql:host=localhost;dbname=book_db';
$db_user_name = 'root';
$db_user_pass = '';

$conn = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $characters_lenght = strlen($characters);
   $random_string = '';
   for($i = 0; $i < 20; $i++){
      $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
   }
   return $random_string;
}

if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $insert_book = $conn->prepare("INSERT INTO `book_form`(id, name, email, phone, address, location, guests, arrivals, leaving) VALUES(?,?,?,?,?,?,?,?,?)");
   $insert_book->execute([$id, $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

   $success_msg[] = 'booked successfully!'; 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

<div class="heading" style="background:url(images/110-bliss-c.webp) no-repeat">
   <h1>Book Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Lock in your travel experience!</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" maxlength="30" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" maxlength="50" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" maxlength="10" min="0" max="9999999999" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" maxlength="50" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="place you want to visit" name="location" maxlength="50">
         </div>
         <div class="inputBox">
            <span>How many :</span>
            <input type="number" min="1" max="99" maxlength="2" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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

<?php
if(isset($success_msg)){
   foreach($success_msg as $success_msg){
      echo '<script>swal("'.$success_msg.'", "", "success");</script>';
   }
}
?>

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