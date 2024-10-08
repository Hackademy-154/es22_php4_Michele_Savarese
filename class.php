esercizio 1 - Lavorare con le classi astratte pt. 1


Crea un file chiamato class.php e crea una classe astratta Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
-- Attualita'
-- Sport
-- Gossip
-- Storia
Tutte le classi dovranno implementare il metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.
<?php

abstract class Category
{
    abstract public function getMyCategory();
}

class Actuality extends Category{

    public function getMyCategory()
    {
        echo "- Sezione di attualità; \n";
    }

}

class Sport extends Category{

    public function getMyCategory()
    {
        echo "- Sezione di sport; \n";
    }

}

class Gossip extends Category{

    public function getMyCategory()
    {
        echo "- Sezione di gossip; \n";
    }
}

class History extends Category{

    public function getMyCategory()
    {
        echo "- Sezione di storia; \n";
    }
}

$impero = new History();
$impero->getMyCategory();
?>