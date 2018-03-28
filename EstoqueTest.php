<?php

require_once 'Estoque.php';

use PHPUnit\Framework\Testcase;

class EstoqueTest extends Testcase
{

	private $estoque;

	public function setUp(){

		$this->estoque = new Estoque();

	}


	public function testAddItem(){

		$item = "blusa azul";
		$qtd = 5;
		
		$this->estoque->add($item,$qtd);

		$this->assertSame ($qtd, $this->estoque->get($item));
	}

	public function testSomaQuantidade(){

	$item = "blusa azul";



	$this->estoque->add($item,1);
	$this->estoque->add($item,5);
	$this->estoque->add($item,10);

	$this->assertSame (16, $this->estoque->get($item));
		
	}

	/**
	*@expectedException InvalidArgumentException
	*@expectedExceptionMessage Item não existe no estoque
	*/
	public function InvalidArgumentException(){

	

		$this->estoque->get('Blusa X');
	
	}

	public function testRemoveQuantidade(){

		$item = "blusa Y";
		$this->estoque->add($item, 10);
		$this->estoque->add($item, 3);
		$this->estoque->add($item, 8);


		$this->estoque->remove($item, 15);
		$this->assertSame(6, $this->estoque->get($item));

		$this->estoque->remove($item, 3);
		$this->assertSame(3, $this->estoque->get($item));
	
	
	}




}