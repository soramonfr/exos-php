<?php
$directory = 'img/';
$files = scandir($directory);
$fcount = 0; 
foreach($files as $key => $image){
    if (!is_dir($image)){
        $fcount++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PHP - Upload d'images</title>
</head>

<body>
    <div class="container bg-light text-center mt-5">
        <h1># PHP - Upload d'images</h1>
        <div class="form">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label for="fileToUpload">Veuillez choisir une image:</label>
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                <input type="submit" value="Valider">
            </form>
            <img id="imgPreview">
            <a href="gallery.php"><button type="button" class="btn btn-primary m-2" formaction="gallery.php">
                    Images <span class="badge bg-secondary"><?= $fcount ?></span>
                </button></a>
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

        <?php
        // Retourne le type mime à l'extension mimetype
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        // Récupère le mime-type d'un fichier spécifique */
        $file_MimeType = $finfo->file($_FILES['fileToUpload']['tmp_name']);

        if (isset($_FILES['fileToUpload'])) {
            $validExtension = ["image/png", "image/jpg", "image/jpeg", "image/gif"];
            if (!in_array($file_MimeType, $validExtension)) {
                echo "Le fichier transmis doit être une image. Il n'a pas été uploadé";
            } else if (($_FILES['fileToUpload']['size'] > 1024 * 1024)) {
                echo "Le fichier doit faire moins de 1Mo. Il n'a pas été uploadé.";
            } else {
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'img/' . uniqid() . strrchr($_FILES['fileToUpload']['name'], '.'));
                echo "L'image (" . $_FILES['fileToUpload']['name'] . ") a bien été uploadée.";
            }
        }
        ?>
    </div>

    <script src="assets/script.js"></script>
</body>

</html>