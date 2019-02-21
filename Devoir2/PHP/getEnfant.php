<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from enfant, chambre where enfant.numChambre = chambre.idChambre");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unEnfant)
{
    if (enfant.sexeEnfant == chambre.typeChambre){
    echo "<div class='divEnfant'>";
        echo "<em>".$unEnfant['idEnfant']."</em>";
        echo "<em>".$unEnfant['prenomEnfant']."</em>";
        echo "<em>".$unEnfant['sexeEnfant']."</em>";
    echo "</div>";
    }
    else{
        echo "Impossible car pas du même sexe";
    }
}

?>