<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

 <div class="user">
   <img src="images/img-5.jpg">
   <h3 class="name">Isaac Muhanga</h3>
   <p class="post">Barista</p>
<div id="#menu" class="fas fa-bars"></div>
   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Isaac Muhanga</h3>
      <span data-aos="fade-up">A Barista</span>
      <p data-aos="fade-up">Currently working at Razana Hotel Nairobi</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">The below information are descriptions about myself.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Isaac Muhanga Jomo </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> isaacmuhanga@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Nairobi, KENYA </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +254 790927156 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 27 years </h3>
         <h3 data-aos="zoom-in"> <span>Gender : </span> Male </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="PERSONAL CV.docx" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>CAPPUCCINO</span> <span>98%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>BLACK COFFEE</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>MACCHIATO</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CAFE AU LAIT</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2006-2016 )</span>
               <h3>Primary School</h3>
               <p>Aligula primary school</p>
            </div>
            <div class="box" data-aos="fade-right">
               <span>( 2012 - 2016 )</span>
               <h3>Hish School</h3>
               <p>St. Jude Seregea Secondary School</p>
            </div>
            <div class="box" data-aos="fade-right">
               <span>( 2016 - present )</span>
               <h3>Training Ground</h3>
               <p>"Certified Barista, Specialty Coffee Association" </p>
               <p>Razana Hotel</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Proffesional Experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2016 - 2018 )</span>
               <h3>Beginner Barista</h3>
               <p>Assisted the head barista with drink preparation, milk frothing, and equipment maintenance</p>
<p>Provided friendly and efficient customer service, taking orders, and answering questions</p>
<p>Developed expertise in latte art, creating visually stunning drinks for customers</p>
<p>Helped with inventory management, stocking supplies, and ordering new products</p>
</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2018 - present )</span>
               <h3>Professioned Barista</h3>
               <p>Prepare and serve high-quality espresso drinks, pour-overs, and specialty beverages to customers</p>
               <p>Train new hires on proper espresso machine operation, drink preparation, and customer service</p>
               <p>Maintain a clean and organized work area, restock supplies, and handle cash transactions</p>
               <p>Collaborate with the kitchen team to ensure food and beverage orders are accurate and timely</p>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>razana hotel services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <h3>Lodging Services</h3>
         <p>we offer well maintained rooms for affordable prices with bathroom services too.</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <h3>Relaxation Services</h3>
         <p>the hotel offers a well ventilated places where customers can relax and enjoy themselves.</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <h3>Customer management</h3>
         <p>in case of any questions or any problem we offer a very friendly customer services and you can feel free to complain about any inconvinient</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <h3>Free Wi-Fi Services</h3>
         <p>the hotel offers free internet services to their customers.</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <h3>Hotel Services</h3>
         <p>we also offer foods and drinks.you can also book for some services that you may need later</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <h3>Coffee Making</h3>
         <p>we make any kind of coffee drinks which are made by our professional baristas.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>Message To My MOM</h3>
         <span>( I LOVE YOU MAMA )</span>
      </div>

      <div class="box" data-aos="zoom">
         <img src="images/img-2.jpg" alt="">
        >
         
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         
        
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
   
       
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
        
        
      </div>


</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <button type="submit" class="btn">send... <i class="fas fa-paper-plane"></i></button>
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+254 790927156</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>isaacmuhanga@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Nairobi, Kenya</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Isaac Muhanga</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>