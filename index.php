esercizio 2 - Lavorare con le classi astratte pt. 2
Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi
Titolo
Categoria
Tag
Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.
hint: utilizzare la funzione di php require_once(); per richiamare il file  in index.php


<?php

class Post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($titolo, Category $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function showTitle() {
        return $this->titolo;
    }

    public function showCategory() {
        return $this->categoria->getMyCategory();
    }

    public function showTag() {
        return $this->tag;
    }

    public function showPost() {
        echo "Titolo: " . $this->showTitle() . "\n";
        echo $this->showCategory();
        echo "Tag: " . $this->showTag() . "\n";
    }



}

abstract class Category
{
    abstract public function getMyCategory();
}

class Actuality extends Category{

    public function getMyCategory()
    {
        echo "Categria: attualità; \n";
    }

}

class Sport extends Category{

    public function getMyCategory()
    {
        echo "Categria: sport; \n";
    }

}

class Gossip extends Category{

    public function getMyCategory()
    {
        echo "Categria: gossip; \n";
    }
}

class History extends Category{

    public function getMyCategory()
    {
        echo "- Categria: storia; \n";
    }
}
$articoloActuality = new Actuality();
$articoloSport = new Sport();
$articoloGossip = new Gossip();
$articoloHistory = new History();


$articolo1 = new Post("Napoleon III in tresca con Garibaldi", $articoloGossip, "inciuciamenti");
$articolo1->showPost();


?>