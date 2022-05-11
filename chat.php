<?php

session_start();
Header ("Content-Type: application/json; chartset=UTF-8");
$resposta = new stdClass;
$resposta->status = 'dc';
$resposta->mensagem = [];
$usuario = new stdClass;
$usuario ->nome = 'Hugo';
$usuario -> cor_texto = '#afa';
$usuario -> cor_fundo = '#faf';
$usuario -> id = 'gadeji';
$resposta -> usuarios = [$resposta];
echo (json_encode($resposta));

echo(json_encode($resposta));
?>