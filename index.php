<?php
include ('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <img src=<?php echo($firstMovie->img) ?> alt="">
                <p> Titolo: <?php echo($firstMovie->title)  ?></p>
                <p> Genere: <?php echo($firstMovie->genre)  ?></p>
                <p> Anno: <?php echo($firstMovie->year)  ?></p>
                <p> Lingua: <?php echo($firstMovie->language)  ?></p>
                <p> Voto: <?php echo($firstMovie->voto)  ?></p>
            </div>

            <div class="col-12 card">
            <img src=<?php echo($secondMovie->img) ?> alt="">
                <p> Titolo: <?php echo($secondMovie->title)  ?></p>
                <p> Genere: <?php echo($secondMovie->genre)  ?></p>
                <p> Anno: <?php echo($secondMovie->year)  ?></p>
                <p> Lingua: <?php echo($secondMovie->language)  ?></p>
                <p> Voto: <?php echo($secondMovie->voto)  ?></p>
            </div>
        </div>
    </div>



</body>
</html>