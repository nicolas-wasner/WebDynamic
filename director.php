<?php

function getBlock($file, $data = [])
{
    require $file;
}

echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\">
    <title>director</title>
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>";

getBlock("php/infosDirector.php");
getBlock("php/filmographie.php");
getBlock("php/presD.php");
//include 'php/infosDirector.php';
//include 'php/filmographie.php';
//include 'php/presD.php';



echo"</body>
</html>";
