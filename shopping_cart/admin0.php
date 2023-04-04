<?php

@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'h3.php'; ?>
<br /><br /><br />
<h1 align="center"  class="heading">select category of product you want to add</h1>
<div class="container" >
<div class="user-profile" style="border:4px solid black">
<div class="flex">
      <a href="admin.php" class="btn"> ADD NEW FRUITS AND VEGETABLE</a>
      <a href="admin2.php" class="option-btn">ADD NEW MEAT PRODUCTS</a>
      <a href="admin3.php" class="btn">ADD NEW SOFT DRINKS PRODUCT</a>
      <a href="admin4.php" class="option-btn">ADD NEW DAIRY PRODUCTS</a>
   </div>
</div>
