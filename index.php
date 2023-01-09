<?php
require __DIR__ .  '/db.php';
require  __DIR__ . '/classes/movieClass.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Films</title>
</head>
<body>
    <?php

  for($i = 0; $i < count($films) ; $i++) {
    $film= new movie($films[$i]['name'],$films[$i]['duration'],$films[$i]['adult'],$films[$i]['publication']);
 ?>
 <ul>
    <li><?php echo $film->getTitle() ?></li>
    <li><?php echo $film->durate ?></li>
    <li><?php echo $film->yearPublication ?></li>
    <li><?php echo $film->movieYears?></li>
 </ul>
 <?php }; ?>
</body>
</html>