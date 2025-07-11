
<?php
 /* 
 echo '<pre>';// formate l'affichage du deboguage
 var_dump($_POST);
 var_dump($_FILES);
 echo '</pre>';
 */

 $ispost=false;
if (isset($_FILES['image'])&& $_FILES['image']['error'] === 0 && isset($_POST['author'])) {
    
    $an=date('Y');
    $mois=date('M');
    $jour=date('d');
    $heure=date('H');
    $minute=date('i');
    $author = $_POST['author'];
    $image = $_FILES['image']['name'];
    $imageName = $jour.'_'. $mois . '_' . $an . '_' . $heure . 'H' . $minute . '_Auteur:' .$author. '_' . $image;
    $chemin_tmp = $_FILES['image']['tmp_name'];
    $upload=move_uploaded_file($chemin_tmp,"img/".$imageName); 
    if ($upload) {
        $ispost=true;
        
        echo "<p>L'image a été téléchargée avec succès ! </p>";
        echo '<img class="centered" src="img/'.$imageName.'" alt="img/'.$imageName.'"><br />'.$imageName.'<br />';
        echo "<p>revenir à la <a href='index.php'>page d'accueil</a> pour voir l'image.</p>";
        
    } else {
        echo "<div class='centered'> <p> Échec du téléchargement de l'image. </p> <br> revenir à la <a href='index.php'>page d'accueil</a> </div>";
    }
} 
else {
    echo "<div class='centered'> <p> Aucune image à télécharger ou une erreur s'est produite. </p> </div>";     
}  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Insta</title>
    <link rel="stylesheet" media="screen" href="uploaderStyle.css" type="text/css" />
</head>
<body>

<?php /*if($upload && $ispost) : ?> 
        <p>L'image a été téléchargée avec succès !</p>
    
    
        <img src="img/<?= $imageName?>" alt="img/<?= $imageName?>">
    
    
    
        <p>Revenir à la <a href="index.php">page d'accueil</a></p>
    
</div>
<?php endif; */ ?>

</body>
</html>
