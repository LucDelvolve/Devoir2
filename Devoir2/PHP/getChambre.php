<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from chambre, maison where chambre.numMaison = maison.idMaison");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $uneChambre)
{
    echo "<div class='divChambre'>";
        echo "<em>".$uneChambre['idChambre']."</em>";
        echo "<em>".$uneChambre['nomChambre']."</em>";
        echo "<em>".$uneChambre['nbLits']."</em>";
        echo "<em>".$uneChambre['typeChambre']."</em>";
    echo "</div>";
}
if (chambre.nbLits == nbEnfant){
    echo "La chambre est complète";
}
?>