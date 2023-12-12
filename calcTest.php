<?php
use PHPUnit\Framework\TestCase;

require_once 'calc.php';

class CalcTest extends TestCase{
    public function testSoma(){
        $calc = new Calculadora();
        $result = $calc->soma(3,4);

        $this->assertEquals(7,$result);
    }

    public function subTest(){
        $calc = new Calculadora();
        $result = $calc->sub(10,5);

        $this->assertEquals(5,$result);
    }
}

?>