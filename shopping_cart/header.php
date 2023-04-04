<header class="header">

   <div class="flex">

      <a href="#" class="logo">ENTER HERE NEW PRODUCTS</a>

      <nav class="navbar">
         <a href="admin0.php">add products</a>
         <a href="products.php">view products</a>
         <a href="help.php.php">help</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart {<span><?php echo $row_count; ?></span>} </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>
</header>
<div align="right" style="padding:2rem" >
<nav align="center"   style="background:white; border-radius:5px; width:80px; border:3px solid black; font-size:17px; color:white">
   <a href="admin0.php"><b><i>..back</i></b></a>
      </nav>
      </div>