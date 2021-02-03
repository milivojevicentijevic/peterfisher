<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php
        require 'Painter.php';
        $shape = new Circle();
        $artist = new Painter();
        echo $artist->addShape($shape);
    ?>
</body>
</html>

<!-- (nothing) -->