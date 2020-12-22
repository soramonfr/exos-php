<?php

/**
 * Fonction pour compter les images d'un dossier
 */
function count_image($directory = "img/")
{
    $fcount = 0;
    $files = scandir($directory);
    foreach ($files as $image) {
        if (is_file("$directory/$image")) {
            $fcount++;
        }
    }
    return $fcount;
}

/**
 * Fonction pour vérifier si un fichier a correctement été uploadé
 */
function checkUploadFile()
{
    if (!isset($_FILES['fileToUpload'])) {
        return false;
    }

    $validExtension = ["image/png", "image/jpg", "image/jpeg", "image/gif"];
    if (!in_array(mime_content_type($_FILES['fileToUpload']['tmp_name']), $validExtension)) {
        return "Le fichier transmis doit être une image. Il n'a pas été uploadé";
    }

    if (($_FILES['fileToUpload']['size'] > 1024 * 1024)) {
        return "Le fichier doit faire moins de 1Mo. Il n'a pas été uploadé.";
    }
    return true;
}

// On vérifie si un fichier a été upload et qu'il est conforme
// S'il ne l'est pas, un message d'erreur est retourné par la fonction
$error_msg = checkUploadFile();

// Initialisation d'un message de succès
$success_msg = "";

// Si aucun message d'erreur n'a été retourné, alors on peut ajouter le dit fichier à notre galerie
if ($error_msg === true) {
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'img/' . uniqid() . strrchr($_FILES['fileToUpload']['name'], '.'));
    // On définit un  message de succès qui sera affiché dans le code
    $success_msg = "L'image (" . $_FILES['fileToUpload']['name'] . ") a bien été uploadée.";
}

// Maj du compteur d'image
$img_count = count_image("img/");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PHP - Upload d'images</title>
</head>

<body>
    <div class="container text-center mt-5">
        <h1># PHP - Upload d'images</h1>
        <div class="form">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="fileToUpload">Veuillez choisir une image:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                <input type="submit" value="Valider" id="submit-btn">
            </form>
            <img id="imgPreview">
            <a href="gallery.php"><button type="button" class="btn btn-dark m-2" formaction="gallery.php">
                    Images <span class="badge bg-secondary"><?= $img_count ?></span>
                </button></a>
        </div>

        <?= $error_msg !== true ? $error_msg : "" ?>
        <?= $success_msg ?>
    </div>

    <!-- Taille maxi: 1Mo soit 1048576 octets soit 1024 * 1024 -->
    <!-- 1024 = 1 Ko // 1024 * 2 = 2ko... // 1024 * 1024 = 1 Mo // 1024 * 1024 *1024 = 1 Go // ... -->

    <!-- Deux solutions valables pour trouver mime type content:
        Solution1:
        Retourne le type mime à l'extension mimetype
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        Récupère le mime-type d'un fichier spécifique */    
        $file_MimeType = $finfo->file($_FILES['fileToUpload']['tmp_name']);
        echo $file_MimeType;
        
        Solution2:
        mime_content_type($_FILES['fileToUpload']['tmp_name']);
        echo mime_content_type($_FILES['fileToUpload']['tmp_name']); -->

    <script src="assets/script.js"></script>
</body>

</html>