<?php

include "conecta_banco.php";
include "header.php";

$tarefa      = $_POST["txttarefa"];
$data_tarefa = $_POST["txtdata"];

$comando = "INSERT INTO agenda(tarefa, data_entrega) VALUES ('$tarefa', '$data_tarefa')";

$query = $mysqli->query($comando);

?>

  <header class="header"> 
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">Incluir tarefas</h1>
        </div>
      </div>
    </div>
  </header>

  <section class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="title_excluir">Inclusão realizada com sucesso</h2>
      </div>
    </div>
  </section>

  <div class="d-flex justify-content-center">
    <button onclick="location.href='consultageral.php'" class="btn mr-2">Consultar</button>
    <button onclick="location.href='index.html'" class="btn">Página inicial</button>
  </div>

  </body>
</html>