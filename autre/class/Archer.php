<?php

class Archer extends Personnage {
    public $vie = 40;

    public function attaque ($cible){

        $cible->vie-=$this->atk;
        parent::attaque($cible);
    }
}