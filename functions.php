<h1>Ajouter une voie ou un bloc</h1>

<p>
    Une fonction personnalisée permettant de sélectionner une cotation dans une liste déroulante.
    Les cotations vont de 3 à 8c+. 
    
    La contation fonctionne comme suit : 

    3, 4, 4a, 4a+, 4b, 4b+ .... Jusque 9c en falaise mais 8 suffira pour une salle indoor.

    On choisit un affichage en btn radios.
</p>

<h2>

<?php

$typeOfClimb = array("Bloc", "Voie");
$cPaliers = array("3", "4", "5", "6", "7", "8"); // Les différents paliers de cotations.
$cLetters = array("a", "b", "c"); // Les indices de difficultés pour un palier
$cPrecision = array("classique", "+") ; // L'indice de précision pour une lettre donnée. 

displayRadio($typeOfClimb);
displayRadio($cPaliers);
displayRadio($cLetters);
displayRadio($cPrecision);

echo "<form action='reponse.php'>";

echo "<p><input type ='submit' value ='Envoyer'></p>";

echo "</form>";


function displayRadio($array){  
    
    echo "<form>";
   
    foreach ($array as $value){

       $name = implode($array); // Je récupère le contenu du tableau en string pour obtenir un nom unique

        echo "<input type='radio' id='$value' name=$name>". // Le $name est important. Voir en dessous
        "<label for ='$value'>$value</label>";        

    };

    echo "</form>";

}

?>

</h2>

