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
    <link rel="stylesheet" href="style.css">
    <title>List Films</title>
</head>
<body>
    <div class="container">
        <h1>Lista film</h1>
        <ul class="section-film">
            <li>TITLE</li>
            <li>DURATE</li>
            <li>PUBLICATION</li>
            <li>MOVIEYEARS</li>
        </ul>
        <?php
        for($i = 0; $i < count($films) ; $i++) {
            $film= new movie($films[$i]);
        ?>
        <ul class="info-film">
            <li><?php echo $film->getTitle() ?></li>
            <li><?php echo $film->durate ?></li>
            <li><?php echo $film->yearPublication ?></li>
            <li><?php echo $film->movieYears?></li>
        </ul>
        <?php }; ?>
    </div>
</body>
</html>