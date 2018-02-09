<?php

use App\Pedido;

class PedidoTest extends PHPUnit_Framework_TestCase
{

    public function testTeste()
    {
        $obj = new Pedido();
        $this->assertEquals("Philipe Allan Almeida", $obj->teste());
    }


}