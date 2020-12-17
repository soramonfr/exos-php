<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>PHP - Upload d'images</title>
</head>

<body>
    <h1># PHP - Upload d'images</h1>
    <div class="form">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="imgFile">Veuillez choisir une image:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
            <input type="file" name="imgFile" id='imgFile' accept="image/png, image/jpeg, image/gif, image/png">
            <input type="submit" value="Valider">
        </form>
    </div>

    <?php

    ?>

    <script src="assets/script.js"></script>
</body>

</html>