<?php
echo "Bonjour ".$_POST["prenom"]." ".$_POST["nom"].",<br>Es-tu bien né le ".$_POST["date"]." ?<br>Si ces informations sont incorrectes, veuillez les saisir de nouveau <a href='exo4.html'>ici</a> !";

/*$fichier = fopen("resultats.txt", "w") or die("Unable to open file!");
fwrite($fichier, $_POST["prenom"]);
fwrite($fichier, $_POST["nom"]);
fwrite($fichier, $_POST["date"]);
fwrite($fichier, $_POST["niveau"]);
fclose($fichier);*/

$Server="e-srvlamp";
$User="e184943";
$Pwd="usz27ag";
$DB="e184943";

$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
if (!$Connect)
echo "Connexion à la base impossible";

$Query = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR(30) NOT NULL,
date_naissance DATE NOT NULL,
niveau VARCHAR(30) NOT NULL,
)";

$Result = $Connect->query($Query);

if (mysqli_query($Connect, $sql)) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($Connect);
}
mysqli_close($Connect);

?>