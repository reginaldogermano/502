<?php

//TestesTest.php

use PHPUnit\Framework\Testcase;

class TestesTest extends Testcase
{
	
	//Testa se é Idêntico

	public function testSame(){
		$soma = 4+2;

		$this->assertSame(6, $soma);


	}

		//Testa se é Verdadeiro somente (boloean)

	public function testTrue(){
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);


	}

	//Testa se é false somente (boloean)

	public function testFalse(){
		$negativo = false;

		$this->assertFalse($negativo);


	}

	//Testa se o count é igual

	public function testCount(){
		$arr = ['a',1, true];

		//$count = count($arr);

		$this->assertCount(3, $arr);
		//$this->assertSame(3, $arr);


	}

		//Testa se o count é igual

	public function testEmpty(){
		$vazio = [];

		
		$this->assertEmpty($vazio);


	}

			//Testa se é nulo

	public function testNull(){
		$vazio = null;

		
		$this->assertNull($vazio);


	}

		//Testa se é nulo

	public function testEquals(){
		$a = "1";
		$b = 1;

		
		$this->assertEquals($a,$b);


	}


}
