<?php
function lire_dossier()
{
    $file_names = [];
    try {
        $photos_dir = opendir("img/");

        do {
            $file_name = readdir($photos_dir);
            // Je n'affiche pas les fichiers cachés (commençant par un point) et les répertoires spéciaux "." et ".."
            if ($file_name && $file_name != "." && $file_name != ".." && $file_name != "/") {
                $file_names[] = $file_name; // J'ajoute le nom du fichier à la liste
            }
        } while ($file_name);
    } catch (\Throwable $th) {
        throw $th;
    }
    return $file_names;
}

function affImg(){

    $liste_des_fichiers = lire_dossier();
    foreach ($liste_des_fichiers as $file_name) {
    echo '<img src="img/'.$file_name.'" alt="img/'.$file_name.'"><br />'.$file_name.'<br />';
}

}

?>
