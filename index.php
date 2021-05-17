<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = 'lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex debitis minima nobis id architecto
     numquam laborum quo fugiat modi error,
    ipsum voluptate doloremque iure, minus sequi consectetur sapiente corrupti architecto?';
    $badword = $_GET['badword'];
    ?>
    <p>IL mio testo: <?php echo $text; ?></p>
    <p>la lungezza del mio testo è: <?php echo strlen($text); ?></p>
    <p><?php echo $badword; ?></p>
    <p>Il testo censurato: <?php echo str_replace($badword, '***', $text); ?></p>

</body>
</html>