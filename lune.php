<?php

// Date du jour
$dateActuelle = date("d-m-Y", strtotime('now')); 
$dateActuelleA = date("Y-m-d", strtotime('now')); 
$dateActuellej1 = date("d-m-Y", strtotime('now +1 days')); 
$dateActuelleAj1 = date("Y-m-d", strtotime('now +1 days')); 

// Date de la dernière pleine lune
$dpleinelune = "27-11-2023 10:17"; // Mettre ici la date et l'heure de la dernière pleine lune
$dpleinelune = DateTime::createFromFormat('d-m-Y H:i', $dpleinelune)->format('d-m-Y H:i');

// Nouvelle lune
$nouvellelune = date("d-m-Y", strtotime($dpleinelune.' +15 days +14  Hours +44 Minutes')); 
$nouvelleluneA = date("Y-m-d", strtotime($dpleinelune.' +15 days +14  Hours +44 Minutes')); 

// Premier quartier lune
$pquartierlune = date("d-m-Y", strtotime($dpleinelune.' +21 days +14  Hours +44 Minutes')); 
$pquartierluneA = date("Y-m-d", strtotime($dpleinelune.' +21 days +14  Hours +44 Minutes')); 

// Pleine lune
$pleinelune = date("d-m-Y", strtotime($dpleinelune.' +29 days +14  Hours +44 Minutes')); 
$pleineluneA = date("Y-m-d", strtotime($dpleinelune.' +29 days +14  Hours +44 Minutes')); 

// Dernier quartier lune
$dquartierlune = date("d-m-Y", strtotime($dpleinelune.' +37 days +14  Hours +44 Minutes')); 
$dquartierluneA = date("Y-m-d", strtotime($dpleinelune.' +37 days +14  Hours +44 Minutes')); 

//
echo "Nouvelle lune ".$nouvellelune;
echo "<br>";
echo "Premier quartier lune ".$pquartierlune;
echo "<br>";
echo "Pleine lune ".$pleinelune;
echo "<br>";
echo "Dernier quartier lune ".$dquartierlune;
echo "<br>";

//Age de la lune

$age1 = new DateTime($nouvelleluneA); 
$age2 = new DateTime($dateActuelleA); 
$age = $age1->diff($age2);

// Vérification de la phase lunaire du jour    a effacer aprè test

//$dateActuelleA = date("Y-m-d", strtotime('now +2 days')); 

//$dateActuelleAj1 = date("Y-m-d", strtotime('now +3 days')); 


if ($age->days == "0") 
{
	?>
	<img src="imgs/0.jpg">
	<br>
	<?php
    echo "Stade : Nouvelle Lune 0%";
	echo "<br>";
   	echo "Age : " . $age->days . " jour";
} 
elseif ($age->days == "1")
 {
	 	?>
	<img src="imgs/1.jpg">
	<br>
	<?php
    echo "Stade : Nouvelle lune";
	echo "<br>";
	echo "Visibilité : ~ 1 à 5%";
	echo "<br>";
    echo "Tendance : croissante";
	echo "<br>";
    echo "Age : " . $age->days . " jour";
} 

elseif ($age->days >= "2" && $age->days <= "3")
 {
	 	?>
	<img src="imgs/2.jpg">
	<br>
	<?php
    echo "Stade : Premier croissant";
	echo "<br>";
	echo "Visibilité : ~ 5 à 10%";
	echo "<br>";
    echo "Tendance : croissante";
	echo "<br>";
    echo "Age : " . $age->days . " jours";
} 
elseif ($age->days >= "4" && $age->days <= "5")
 {
	 	?>
	<img src="imgs/3.jpg">
	<br>
	<?php
    echo "Lune croissante";
	echo "<br>";
    echo "Age : " . $age->days . " jours";
} 
elseif ($age->days == "6")
 {
	 	?>
	<img src="imgs/5.jpg">
	<br>
	<?php
    echo "Premier quartier de Lune";
	echo "<br>";
    echo "Age : " . $age->days . " jours";
} 
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}





?>




  