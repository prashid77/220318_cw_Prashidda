<?php
ob_start();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect('localhost', 'root', '', 'signup') or die('connection failed');
    $username = strtolower(trim($_POST["username"]));
    $password = trim($_POST["password"]);

    $sql = "SELECT passwd FROM signup WHERE fname = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['passwd'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION["username"] = $username;
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Invalid username or password.";
    }

    mysqli_close($conn);
}
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
<div class="container">
      <h1>Login</h1>

      <?php if (isset($error_message)) { ?>
         <p class="error-message"><?php echo $error_message; ?></p>
      <?php } ?>

      <form action="" method="post">
         <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required />
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required />
         </div>
         <div class="btn-field">
            <input type="submit" class="button" value="Login" name="submit">
         </div>
         <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </form>
   </div>


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
