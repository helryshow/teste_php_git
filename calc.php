<?php
class Calculadora{
    public function soma($a,$b){
        return $a + $b;
    }
}

class Calculadora{
    public function sub($a,$b){
        return $a - $b;
    }
}

class Calculadora{
    public function divisao($a,$b){
        if($b === 0 ){
            //throw new IvalidArgumentException("Numero invalido"); ou o de baixo
            return "Não ha divisão por 0";
        }
        return $a / $b;
    }
}

?>