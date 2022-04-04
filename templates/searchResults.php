<?php
$dsn="mysql:host=localhost;dbname=historiamludere";
$find=false;
$length= 0;
$limit= 5;
if (isset($_GET["q"])){
    $find=true;

    $page= isset($_GET["page"]) && !empty($_GET["page"]) ? $_GET["page"]: 1;
    $start= isset($_GET["page"]) && !empty($_GET["page"]) ? $limit * ($_GET["page"] - 1): 0;
    $searchString= trim(strip_tags($_GET['q']));
}



require("header.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de personnage</title>
</head>
<body>
    
</body>
</html>