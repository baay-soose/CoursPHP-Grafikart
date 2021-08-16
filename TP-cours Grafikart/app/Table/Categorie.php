<?php
namespace App\Table;
use App\App;
class Categorie extends Table{

    protected static $table = 'categories';

    public function getUrL(){

        return 'index.php?p=categorie&id=' . $this->id;

    }
}
?>