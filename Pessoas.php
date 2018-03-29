<?php 

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];

sort($pessoas);

foreach ($pessoas as $listpessoas){

	$dateTime[] = \DateTime::createFromFormat('d/m/Y', $listpessoas['data_nasc']);



}

$compara = $dateTime[0]->format('d/m/Y');
//print_r($compara);

for($y=0; $y<count($dateTime); $y++){

	if( $dateTime[$y]->format('d/m/Y') > $compara ){

		echo $compara. "<br />";

	}
	//$compara  = $dateTime[$y]->format('d/m/Y');

}


