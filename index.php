
<?php 
    require 'function.php';
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="indexStyle.css" type="text/css" />
    <title>Mini Insta</title>
</head>
<body>
    <h1>Mini Insta</h1>
    <p>Ajoutez une photo !</p>
    <form action="imgUploader.php" method="post" enctype="multipart/form-data">
        <input type="text" name="author" placeholder="Auteur" required>
        <label class="labelfile" for="file">parcourir...</label>
        <input type="file" name="image" id="file" accept="image/*" required> 
        <!-- id="nom de l'id" permet de lier l'input au label for="nom de la clé" -->
        <button type="submit">Envoyer</button>
    </form>
    <div class="posts">
        <?php
        affImg();
        ?>
    </div>
   

</body>
</html>