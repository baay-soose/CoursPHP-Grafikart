<?php

use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
var_dump($categorie);