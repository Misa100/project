<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Les avantages</h3>
         <p>En commandant des livres chez Bookly, les clients bénéficient de nombreux avantages. Tout d'abord, ils ont accès à un choix incroyable de titres.</p>
         <p>Ensuite, ils peuvent commander depuis chez eux, ce qui leur permet d'économiser du temps et de l'argent. Les clients peuvent également bénéficier de promotions régulières et de réductions sur les livres parfois également des livraisons gratuites.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">revues des clients</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>J'adore commander chez Bookly ! Leur sélection de livres est incroyable et j'ai toujours trouvé ce que je cherchais. Leur service client est également excellent, rapide et efficace.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>John Leo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Bookly est ma boutique en ligne préférée pour commander des livres. La livraison est rapide et fiable, et leur sélection est incomparable. J'apprécie également leur service client.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Natalie Fetch</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Je suis tombé amoureux de Bookly dès ma première commande. Leur site web est facile à naviguer. J'apprécie également la qualité de leur service client.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Leon Furrer</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Je suis tellement heureux d'avoir découvert Bookly. Leur choix de livres est fantastique. Je recommande vivement Bookly pour tous les amateurs de livres.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Chanya Murielle</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Je suis un client fidèle de Bookly. Leur collection de livres est toujours à jour avec les dernières sorties. Je recommande fortement Bookly pour tous les amateurs de lecture.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tony ZH</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Je suis tellement content d'avoir trouvé Bookly ! Leur sélection de livres est incroyable. J'ai apprécié leur service client, ils font tout leur possible pour résoudre les problèmes.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cristina Raly</h3>
      </div>

   </div>

</section>




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>