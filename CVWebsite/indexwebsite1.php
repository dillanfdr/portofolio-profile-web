<?php 
  $name = "Dilla";
  $name_website = "BLOEWBEWY";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV bout me</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat+Subrayada:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="
		https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js
		"></script>
</head>

<body> 
  <header>
    <h2><?= $name_website ?></h2>
  </header>
  

  <div id="home">
    <img src="picture/pict me.png">
    <div class="home1 opacity-0">
      <h1>Hi! I’m <?php echo $name; ?></h1>
      <p>Nice to meet you ;)</p>
      <div class="link-home">
        <a href="indexwebsite2.php">Get to Know Me</a>
      </div>
    </div>
  </div>


  <script src="./style.js"></script>
</body>
</html>