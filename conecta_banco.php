<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'test';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

mysqli_set_charset($mysqli, 'UTF8');

if (mysqli_connect_errno()) {
  trigger_error(mysqli_connect_errno());
}



