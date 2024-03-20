<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Ceylon MAGMA is a special website for shopping on the 
internet. What makes it special is that it's easy to use and fun 
to shop there. We sell all kinds of Clothes,Books,Foods  electronics and meny more so no matter what you like you can find it on 
our website.
</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/boy1.png" alt="">
         <p>"Great Selection and Easy Navigation!"
"I love shopping on this site! The range of electronics available is extensive,
and I appreciate how easy it is to find what I need.
The categories and filters make it simple to narrow down choices.
Plus, the detailed product descriptions help me make informed decisions before purchasing."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Janidu pabasara</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/girl1.png" alt="">
         <p>"User-Friendly Interface and Mobile Accessibility"
"Browsing and shopping on this site are a breeze, whether I'm using my laptop or phone.
The website's mobile responsiveness makes it convenient to shop on the go. The layout is intuitive, 
and I appreciate how well-designed it is. Overall, a fantastic user experience!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Himashi Jayasinghe</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/boy2.png" alt="">
         <p>"Reliable Product Quality and Durability"
"I've bought multiple electronics from this website, and the quality has never disappointed. 
The products have all been durable and lived up to their descriptions. It's reassuring to invest in tech that stands the test of time.".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mahesh Karunarathna</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/girl2.png" alt="">
         <p>"Responsive and Knowledgeable Customer Support"
"I had an issue with one of my orders, and the customer support team was quick to respond and incredibly helpful.
 They resolved my problem efficiently, showing their dedication to ensuring a positive customer experience."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sithumini Perera</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/boy3.png" alt="">
         <p>"Fast and Secure Checkout Process"
"The checkout process here is lightning-fast, and I feel secure entering my payment information. 
The site's security measures give me confidence while making transactions."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nirmal Darshana</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/girl3.png" alt="">
         <p>"Regular Updates on New Arrivals and Tech Trends"
"I love how this website keeps me in the loop about the latest tech trends and new product arrivals. 
It's a great way to stay updated on what's happening in the electronics world."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tharushi Ranasingha</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>