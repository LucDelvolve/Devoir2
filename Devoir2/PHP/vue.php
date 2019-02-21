</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Affectation chambre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../JQuery/jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/main.css">
    <script src="../JS/fonctions.js"></script>
    <script src="main.js"></script>
</head>
<body>
<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from maison");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $uneMaison)
{
    echo "<div class='divMaison'>";
        echo "<em>".$uneMaison['idMaison']."</em>";
        echo "<em>".$uneMaison['nomMaison']."</em>";
    echo "</div>";
}
?>
<div id="divChambre"></div>
<div id="divEnfant"></div>

<div id="div1" class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <tr>
        <td>Numéro maison</td>
        <td>Nom maison</td>
    </tr>
</div>

<div id="div2" class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <tr>
        <td>Numéro chambre</td>
        <td>Nom chambre</td>
        <td>Nombre de lit</td>
        <td>Type de chambre</td>
    </tr>
</div>

<div id="div3" class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <tr>
        <td>Numéro enfant</td>
        <td>Prénom enfant</td>
        <td>Sex enfant</td>
    </tr>
</div>

<div id="div4" class="slidecontainer">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
    <tr>
        <td>Numéro enfant</td>
        <td>Prénom enfant</td>
        <td>Sex enfant</td>
    </tr>
</div>
</body>
</html>