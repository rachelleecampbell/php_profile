<?php 

  define("YEAR", 2015);
  define("JOB_TITLE","Web Developer");
  define("MAX_BADGES", 1500);

  $name= "Rachel Trantham"; 
  $location = "New Orleans, LA";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Rachel Trantham | PHP Profile</title>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/10711279.jpg" alt="Mike The Frog">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to my Portfolio</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <pre><?php

      echo JOB_TITLE

      ?>

      </pre>
    </section>
  </body>
</html>