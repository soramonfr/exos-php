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
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
            <input type="file" name="imgFile" id='imgFile' >
            <input type="submit" value="Valider">
        </form>
    </div>

    <!-- $_FILES['imgFile']['size'] -->
    <!-- Taille maxi: 1Mo soit 1048576 octets -->
    <!-- var_dump(pathinfo($_FILES['imgFile']['name'])); -->
    <?php
    var_dump($_FILES);
    if (isset($_FILES['imgFile'])) {
        $validExtension = ["image/png", "image/jpg", "image/jpeg", "image/gif"];
        if (!in_array($_FILES['imgFile']['type'], $validExtension)) {
            echo "Le fichier transmis doit être une image. Il n'a pas été uploadé";
        } else if (($_FILES['imgFile']['size'] > 1024 * 1024)) {
            echo "Le fichier doit faire moins de 1Mo. Il n'a pas été uploadé.";
        } else {
            echo "L'image a bien été uploadée sous le nom suivant: " . $_FILES['imgFile']['name'];
        }
    }
    ?>

    <!-- <script src="assets/script.js"></script> -->
</body>

</html>