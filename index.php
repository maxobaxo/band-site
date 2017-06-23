<?php
  $band_name = "Blink-182";
  $guitarist = "Tom Delonge";
  $bassist = "Mark Hoppus";
  $drummer = "Travis Barker";
  $genre = "Pop-Punk";
  $hometown = "Encinitas, CA";
  $band_photo = "img/blink.jpg";
  $band_site = "https://www.blink182.com";
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title><?php echo $band_name;?></title>
  </head>
  <body>
    <h1>Unofficial <?php echo $band_name;?> Fan Site</h1>
    <h3>If you're a fan of <?php echo $band_name;?>, then you've come to the right place!</h3>

    <img src="<?php echo $band_photo;?>" alt="picture of <?php $band_name;?>" />
    <br>
    <p><?php echo $band_name;?> is a <?php echo $genre;?> band, originally from <?php echo $hometown;?>. I started listening to them in the summer of '69 before they even existed. I jumped on the bandwagon before it was even there. Are <em>you</em> that much of a fan?! Get on board, dude!</p>
    <br>
    <p>Check out their official website <a href="<?php echo $band_site;?>">here</a></p>
  </body>
</html>
