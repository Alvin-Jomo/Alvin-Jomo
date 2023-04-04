<header class="header">

   <div class="flex">
 
   <a href="login.php" class="logo" style="border:4px solid yellow; border-radius:5px">add products</a>
      <nav class="navbar">
         
         <a href="product3.php">SOFT DRINKS</a>
         <a href="product2.php">PROTEIN FOOD</a>
         <a href="product4.php">DAIRY PRODUCTS</a>
         <a href="products.php">FRUITS AND VEGETABLE</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      
      <a href="cart.php" class="cart">cart {<span><?php echo $row_count; ?></span>}</a>

      <div id="menu-btn" class="fas fa-bars"></div>
      <a href="help.php" align="right" class="navbar" style="font-size:20px; color:white; padding:2rem">help</a>
      
</div>



</header>
