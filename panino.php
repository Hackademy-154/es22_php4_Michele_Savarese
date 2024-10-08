<?php
//il nostro panino deve essere composto da: 1 tipo di pane, 1 proteina, 1 elemento


abstract class Bread{
    abstract public function breadTypeType()
}

class WholeGrainBread extends Bread{

    public function breadtype()
    {
        echo "-Tipo di pane: integrale; \n";
    }

}

class WhiteBread extends Bread{

    public function breadType()
    {
        echo "-Tipo di pane: bianco; \n";
    }

}

class Saltinbocca extends Bread{

    public function breadType()
    {
        echo "-Tipo di pane: saltinbocca; \n";
    }

}

class CiabattaDiSemola extends Bread{

    public function breadType()
    {
        echo "-Tipo di pane: Ciabatta di Semola; \n";
    }

}

abstract class Protein{
    abstract public function proteinType();

}

class Hamburger extends Protein{

    public function proteinType(){
        echo "-Proteina - hamburger"
    }
}

class Bacon extends Protein{

    public function proteinType(){
        echo "-Proteina - Bacon"
    }
}

class Frittata extends Protein{

    public function proteinType(){
        echo "-Proteina - frittata"
    }
}

class Tofu extends Protein{

    public function proteinType(){
        echo "-Proteina - tofu condito"
    }
}

class Straccetti extends Protein{

    public function proteinType(){
        echo "-Proteina - Straccetti di cavallo"
    }
}

abstract class Dressing{
    abstract public function dressingType();
}


class PateDiPomodoriniSecchi extends dressingType{

    public function dressingType()
    {
        echo "-Condimento: pate di pomodorini secchi; \n"
    }
}

class Barbecue extends dressingType{

    public function dressingType()
    {
        echo "-Condimento: barbecue; \n"
    }
}


class Tsatsiki extends dressingType{

    public function dressingType()
    {
        echo "-Condimento: Tsatsiki; \n"
    }
}

class Mayo extends dressingType{

    public function dressingType()
    {
        echo "-Condimento: Mayo; \n"
    }
}

//! depency injection - iniezione di dipendenza

class Sandswitch{
    public $bread, $protein, $dressing;

    public function __construct(Bread $pane,Protein $proteina,Dressing $salsa) //type hinting
    {
        $this->bread=$pane;
        $this->protein=$proteina;
        $this->dressing=$salsa;
    }
}

$panino0 new Sandwitch($new WhiteBread(), new Hamburger() , new Mayo());
var_dump($panino);
