<?php

include "conecta_banco.php";

$tarefa      = $_POST["txttarefa"];
$data_tarefa = $_POST["txtdata"];

$comando = "INSERT INTO agenda(tarefa, data_entrega) VALUES ('$tarefa', '$data_tarefa')";

$query = $mysqli->query($comando);

echo "
<h1>Inclusão realizada com sucesso</h1>
<a href= 'index.html'>Voltar</a>";