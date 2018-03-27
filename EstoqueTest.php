<?php

require_once 'Estoque.php';

use PHPUnit\Framework\Testcase;

class EstoqueTest extends Testcase
{


	public function testAddItem(){

		$item = "blusa azul";
		$qtd = 5;


		$estoque = new Estoque();
		$estoque->add($item,$qtd);

		$this->assertSame ($qtd, $estoque->get($item));
	}

	public function testSomaQuantidade(){

	$item = "blusa azul";



	$estoque = new Estoque();
	$estoque->add($item,1);
	$estoque->add($item,5);
	$estoque->add($item,10);

	$this->assertSame (16, $estoque->get($item));
		
	}


}