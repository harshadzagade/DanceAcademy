<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  <link rel="stylesheet" href="css/payment.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="container">
    <div class="pay-type">
      <input class="payment" id="c-card" type="checkbox" checked>
      <label for="c-card">Credit Card</label>
      <input class="payment" id="paypal" type="checkbox">
      <label for="paypal">Debit Card</label>
    </div>
    
    <form method="POST" action="paysuccess.php">
     <label for="name">Name</label>
     <input type="text">
      
      <label for="cc-number">Credit Card Number</label>
      <input id="cc-number" type="text">
      
      <div class="validation">
      <div>
        <label for="expiry">Expiration</label>
        <input id="expiry" type="text">
      </div>
        <div>
      <label for="cvv">CVV</label>
      <input id="cvv" type="text">
          </div>
        </div>
      <button class="button" name="sub">Submit</button>
    </form>
  </div>
</div>
<!-- partial -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>