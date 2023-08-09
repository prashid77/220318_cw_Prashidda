<?php
require_once "session.php";
?>
<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $address = trim($_POST['address']);
    $password = $_POST['passwd'];
    $confirmPassword = $_POST['cpasswd'];

    if (empty($fname) || empty($address) || empty($password) || empty($confirmPassword)) {
        $message[] = 'All fields are required.';
    } elseif ($password !== $confirmPassword) {
        $message[] = 'Confirm password not matched!';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "SELECT * FROM signup WHERE fname = ?");
        mysqli_stmt_bind_param($stmt, "s", $fname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $message[] = 'User already exists';
        } else {
            $stmt = mysqli_prepare($conn, "INSERT INTO signup (fname, address, passwd) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $fname, $address, $hashedPassword);

            if (mysqli_stmt_execute($stmt)) {
                $message[] = 'Registered successfully!';
                header('Location: login.php');
                exit();
            } else {
                $message[] = 'Registration failed!';
            }
        }
    }
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
   <script src="js/script.js"></script>

</head>
<body><section class="header">
    <a href="home.php" class="logo">HashTravel</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
        <a id="lg-bag">
            <a href="login.php" onclick="toggleDropdown()">
                <i class="fas fa-user user"></i>
                <?php
                if (isset($_SESSION["username"])) {
                    echo $_SESSION["username"];
                }
                ?>
            </a>
            
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
    <div class="container">
    <h1>Create Account</h1>
    <?php if (isset($message)) { ?>
        <div class="messages">
            <ul>
                <?php foreach ($message as $msg) { ?>
                    <li><?php echo $msg; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <form action="" method="post">
         <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" name="fname" id="fullName" placeholder="Enter your full name" required />
         </div>
         <div class="form-group">
            <label for="country">Address:</label>
            <input type="text" name="address" id="country" placeholder="Enter your address" required />
         </div>
         <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="passwd" id="password" placeholder="Enter your password" required />
         </div>
         <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" name="cpasswd" id="confirmPassword" placeholder="Confirm your password" required />
         </div>
         <div class="btn-field">
            <input type="submit" class="button" value="Create Account" name="submit">
         </div>
      </form>
      <br /><br />
      <p>Already have an account? <a href="login.php">Login</a></p>
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

</body>
</html>