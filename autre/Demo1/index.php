<?php
require('Personnage.php');
require 'Archer.php';
$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");
$legolas = new Archer("legolas");
 $legolas->attaque($harry);
/*if ($harry->mort()){
    echo("Harry esyt mort :(");
}
else {
    echo ("Harry a survecu bravo ". $harry->vie);
} */
var_dump($harry);
var_dump($merlin);
var_dump($legolas);
?>