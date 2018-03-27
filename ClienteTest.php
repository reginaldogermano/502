<?php

require_once 'Cliente.php';

use PHPUnit\Framework\Testcase;

class ClienteTest extends Testcase
{


	public function testCriacaoCliente(){


		$cliente = new Cliente ('Lucas',46, 'reginaldo.germano@com');

		$this->assertSame('Lucas', $cliente->getNome() );
		$this->assertSame(46, $cliente->getIdade() );
		$this->assertSame('reginaldo.germano@com', $cliente->getEmail() );
	}


}