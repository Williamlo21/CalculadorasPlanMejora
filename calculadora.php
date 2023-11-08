<?php

class Calculadora{
    public $Numero1;
    public $Numero2;

    public function __construct($Numero1, $Numero2)
    {
      $this->Numero1 = $Numero1;
      $this->Numero2 = $Numero2;
    }

    

    /**
     * Get the value of Numero1
     */ 
    public function getNumero1()
    {
        return $this->Numero1;
    }

    /**
     * Set the value of Numero1
     *
     * @return  self
     */ 
    public function setNumero1($Numero1)
    {
        $this->Numero1 = $Numero1;

        return $this;
    }

    /**
     * Get the value of Numero2
     */ 
    public function getNumero2()
    {
        return $this->Numero2;
    }

    /**
     * Set the value of Numero2
     *
     * @return  self
     */ 
    public function setNumero2($Numero2)
    {
        $this->Numero2 = $Numero2;

        return $this;
    }

    public function sumar($Numero1, $Numero2){
      $result = $Numero1+$Numero2;
      return $result;
    }
  public function restar($Numero1, $Numero2)
  {
    $result = $Numero1 - $Numero2;
    return $result;
  }
  public function dividir($Numero1, $Numero2)
  {
    $result = $Numero1 / $Numero2;
    return $result;
  }
  public function multiplicar($Numero1, $Numero2)
  {
    $result = $Numero1 * $Numero2;
    return $result;
  }
}
$calculadora = new Calculadora(5,2);
$a = $calculadora->getNumero1();
$b = $calculadora->getNumero2();
echo $calculadora->sumar($a,$b).PHP_EOL;
echo $calculadora->restar($a, $b) . PHP_EOL;
echo $calculadora->dividir($a, $b) . PHP_EOL;
echo $calculadora->multiplicar($a, $b) . PHP_EOL;



