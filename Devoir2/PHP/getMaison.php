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