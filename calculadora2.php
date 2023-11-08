<?php
class Calculadora
{

    public $n;
    public function __construct(...$n)
    {
        $this->n=$n;
    }



    public function sumar(...$n)
    {
        $result = 0;
        foreach($n as $num){
            $result += $num;

        }
        
        return "El resultado de la suma es: ". $result;
    }
    public function restar(...$n)
    {
        
        $result = array_shift($n);
        foreach ($n as $num) {
            $result -= $num;
            
        }
        
        return "El resultado de la resta es: ". $result;
        
    }
    public function dividir(...$n)
    {

        $result = array_shift($n);
        foreach ($n as $num) {
            if ($num ==0){
                // $result= "Todo número dividido entre 0 da error, por favor verifica los parametros";
                $result = 0;
                return("Error: División por cero. Por favor verifica los parámetros.");
            }else{
                $result /= $num;
            }
            
        }
            return "El resultado de la división es: ".$result;
    }
    public function multiplicar(...$n)
    {
        $result = 1;
        foreach ($n as $num) {
            $result *= $num;
        }
        if ($result == 0){
            return "El resultado de la multiplicación es: " . $result . " debido a que existe el valor 0 en los parametros.";
        }elseif($result != 0){
            return "El resultado de la multiplicación es: " . $result;
        }
        
    }

    /**
     * Get the value of n
     */ 
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set the value of n
     *
     * @return  self
     */ 
    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }
}
$calculadora = new Calculadora(8,7,6,5);
$nu = $calculadora->getN();
$resultado = $calculadora->multiplicar(...$calculadora->n);
echo $calculadora->sumar(...$nu) . PHP_EOL;
echo $calculadora->restar(...$nu) . PHP_EOL;
echo $calculadora->dividir(...$nu). PHP_EOL;
echo $calculadora->multiplicar(...$nu);
// var_dump($nu);


