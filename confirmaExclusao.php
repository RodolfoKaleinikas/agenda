<?php

include "conecta_banco.php";
include "header.php";

$id = $_POST["txtid"];

$comando = "delete from agenda where id = $id";

$query = $mysqli->query($comando);

?>

  <header class="header"> 
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">Excluir tarefas</h1>
        </div>
      </div>
    </div>
  </header>

<section class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="title_excluir">Exclusão realizada com sucesso</h2>
    </div>
  </div>
</section>

<div class="d-flex justify-content-center">
  <button onclick="location.href='consultageral.php'" class="btn mr-2">Consultar</button>
  <button onclick="location.href='index.html'" class="btn">Página inicial</button>
</div>

</body>
</html>