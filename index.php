<?php

function getBlock($file, $data = [])
{
    require $file;
}

$bdd = new PDO('mysql:host=mysql-gaiteur-septheure.alwaysdata.net;dbname=gaiteur-septheure_cineplousse_;charset=utf8', '192216', 'chzPMabr');


$reponse = $bdd->query('SELECT * FROM movie');
$data = $reponse->fetchAll();
echo $data;

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\">
    <title>GHOST BASTARDS</title>
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>";
getBlock("php/header.php");
getBlock("php/infos.php");
getBlock("php/img.php");
getBlock("php/footer.php");
//include 'php/header.php';
//include 'php/infos.php';
//include 'php/img.php';
//include 'php/footer.php';
echo "</body>
</html>";


?>