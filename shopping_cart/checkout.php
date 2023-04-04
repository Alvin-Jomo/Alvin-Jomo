<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];
   $payment = $_POST['payment'];   

   $cart_query = mysqli_query($conn, "SELECT * FROM cart");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code,payment) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$payment')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            
            <span class='total'> total :Ksh ".number_format($price_total)."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your shipping mode : <span>".$method."</span> </p>
            <p> your payment mode : <span>".$payment."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
         
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'h.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> <b>grand total :Ksh<b><?= number_format($grand_total); ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your credit/mpesa number</span>
            <input type="number" placeholder="enter your credit/mpesa number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>name of a flat or building near you</span>
            <input type="text" placeholder="e.g. Ambwere Plaza." name="flat" required>
         </div>
         <div class="inputBox">
            <span>name of the street </span>
            <input type="text" placeholder="e.g. Kefinco" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Kakamega" name="city" required>
         </div>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. Kefinco estate" name="state" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. Kenya" name="country" required>
         </div>
         <div class="inputBox">
            <span>delivery method</span>
            <select name="method">
            <option disabled selected>delivery method</option>
               <option value="road">Shuttle or Buses</option>
               <option value="air">Kenya Air Ways</option>
               <option value="train">SGR Train</option>
               <option value="sea/ocean">Sea or Ocean</option>
            </select>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
         <div class="inputBox">
            <span>payment mode</span>
            <select name="payment">
               <option disabled selected>payment method</option>
               <option value="mpesa">mpesa</option>
               <option value="card">card</option>
               <option value="cash">cash on delivery</option>
               <option value="installments">payment on installments</option>
            </select>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>


</section>
<div align="center">
<label style="padding-left:2rem"><h1>we only accept the following cards</h1><br></label>
<img src="images/card_img.png" alt="" width="40%"/> 

</div>
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>