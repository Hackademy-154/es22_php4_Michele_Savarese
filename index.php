<?php

class User{

    // attributi, costruttore e metodi

    public $username;
    public $email;

    //costruttore
    public function __construct($username, $email)
    {
$this->username = $username;
$this->email = $email;
}

    public function createEmail(){

        $this->email = $this->username . "sito.com";
    }
}

$utente1 = new User('MatteoL', 'matteo@email.it');

$utente2 = new User('MatteoS', 'matteo.s@email.it');
print_r($utente1);
print_r($utente2);

class StudentUser extends User
{
public $hackademy;
public function __construct($username, $email, $hackademy)
{
    parent::__construct($username, $email);
    $this->hackademy = $hackademy;
}

}

$utente3 = new StudentUser('MicL', 'maaatteo@email.it', 154);
print_r($utente3);


//! classe astratta, un modello di partenza per creare altre classi: PROGETTARE
// abstract public function info(); //implementa un metodo per dire alle classi figlie con abstract cosa fare.


//! trait
// permette di utilizzare della logica in classi diverse che sono tra loro indipendenti, quindi non sono legate da ereditarietà+
//usa nomenclatura delle classi
trait JetPack{
    public function fly(){
        echo "ciao mamma sto volando";
    }
}