<?php
namespace App\Table;
use App\App;
class Article extends Table{

    public static function getLast(){

        return App::getDb()->query('SELECT 
        articles.id, articles.titre, articles.contenu, categories.titre as categorie
         FROM articles LEFT JOIN categories ON categorie_id = categories.id',
          __CLASS__); 
         
    }

    public function getUrL(){

        return 'index.php?p=article&id=' . $this->id;

    }
    
    public function getExtrait(){

        $html =  '<p>'.substr($this->contenu, 0, 500 ).'...<p>';
        $html .= '<p><a href = "' . $this->getUrL() . '" >Voir la suite</a></p>';
        return $html;
    }

}