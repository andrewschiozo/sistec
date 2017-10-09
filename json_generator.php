<?php

$projeto1 = array(
    'id' => 1,
    'nome' => "OdontOnline",
    'cliente' => 'Clinica Odontologica Banguela',
    'status' => 'Em andamento'
);

$projeto2 = array(
    'id' => 2,
    'nome' => "LavaJato",
    'cliente' => 'Brasilia - Lava Rapido',
    'status' => 'Em andamento'
);

$projeto3 = array(
    'id' => 3,
    'nome' => "CoinExchange Anglo",
    'cliente' => 'Anglo Investimentos',
    'status' => 'Finalizado'
);

$projeto4 = array(
    'id' => 4,
    'nome' => "Portfolio pessoal",
    'cliente' => 'Aline Fugazza',
    'status' => 'Finalizado'
);

echo json_encode(array($projeto1, $projeto2, $projeto3, $projeto4));
echo '<hr>';

$cliente1 = array(
    'id' => 1,
    'nome' => 'Cliente 1',
    'responsavel' => 'Ligia Machado'
);

$cliente2 = array(
    'id' => 2,
    'nome' => 'Cliente 2',
    'responsavel' => 'Andressa Sisto'
);

$cliente3 = array(
    'id' => 2,
    'nome' => 'Cliente 3',
    'responsavel' => 'Cristina Brito'
);

echo json_encode(array($cliente1, $cliente2, $cliente3));
echo '<hr>';

$consultor1 = array(
    'id' => 1,
    'nome' => 'Giulia Henne',
    'especializacao' => 'Tecnologia',
    'valorHoraFaturada' => 'R$ 75,00',
    'precoHora' => 'R$ 55,00');

$consultor2 = array(
    'id' => 2,
    'nome' => 'Jacqueline Suicide ',
    'especializacao' => 'Engenharia',
    'valorHoraFaturada' => 'R$ 85,00',
    'precoHora' => 'R$ 62,00');

$consultor3 = array(
    'id' => 3,
    'nome' => 'Ragnad Miglioranci',
    'especializacao' => 'Processos Administrativos',
    'valorHoraFaturada' => 'R$ 70,00',
    'precoHora' => 'R$ 57,00');


echo json_encode(array($consultor1, $consultor2, $consultor3));
echo '<hr>';