<?php
$dir = 'img/';
$files = scandir($dir);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($files as $key => $image) {
                if (!is_dir($image)) {
            ?>
                    <div class="card m-1 col-5" style="width: 18rem;">
                        <img src="img/<?= $image ?>" alt="" class="card-img-top">
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>

</html>