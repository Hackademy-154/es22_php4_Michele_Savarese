
esercizio 4
Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:
public function sum($a, $b) {
  return $a + $b;
}
public function sub($a, $b) {
  return $a - $b;
}
public function mul($a, $b) {
  return $a * $b;
}
public function div($a, $b) {
  return $a / $b;
}
public function sqr($a){
  return sqrt($a);
}
Crea una classe Rettangolo con due attributi
Base (b);
Altezza (h);
Crea tre metodi che vanno a calcolare:
Area → b * h;
Perimetro → 2 * b + 2 * h;
Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
Per fare questi calcoli dovete sfruttare le funzioni del Trait Calculator
extra: provate a creare classi per altre figure geometriche e calcolare area e perimetro anche lì sempre sfruttando il trait


<?php

trait Calculator {
  public function sum($a, $b) {
    return $a + $b;
  }
  public function sub($a, $b) {
    return $a - $b;
  }
  public function mul($a, $b) {
    return $a * $b;
  }
  public function div($a, $b) {
    return $a / $b;
  }
  public function sqr($a){
    return sqrt($a);
  }
}

class Rectangle{
  use Calculator;

  public $height;
  public $base;

  public function __construct($height,$base)
  {
    $this->height = $height;
    $this->base = $base;
  }

  public function area(){
    return "L'area del rettangolo è: {$this->mul($this->base, $this->height)}";
}
public function perimetro(){
    return "Il perimetro del rettangolo è: {$this->sum($this->mul($this->base, 2),$this->mul($this->height,2))}";
}

public function diagonale(){
    return "La diagonale del rettangolo è: {$this->sqr($this->sum($this->mul($this->base, $this->base), $this->mul($this->height, $this->height)))}";
}
public function info()
{
    echo "
    {$this->area()}
    {$this->perimetro()}
    {$this->diagonale()}
    ";
}

}

$rettangolo = new Rectangle(5,4);
echo $rettangolo->info();

?>