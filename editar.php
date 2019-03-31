<?php 
include "conecta_banco.php";
include "header.php";

$id = $_GET["id"];

$comando = "select * from agenda where id = $id";

$query = $mysqli->query($comando);

while($dados=mysqli_fetch_object($query)) {
  $tarefa = $dados->tarefa;
  $data = $dados->data_entrega;
}

$query->free();


?>

<header class="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">Editar tarefas</h1>
        </div>
      </div>
    </div>
  </header>

  <section class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center flex-column align-items-center">
        <form name="form" id="formulario" action="gravaEdicao.php" method="POST" class="col-12 d-flex justify-content-center flex-column form_cadastro_tarefa">
          <input type="hidden" name="txtid" value="<?php echo $id; ?>">
          <label for="txttarefa">Tarefa</label>
          <input name="txttarefa" id="txttarefa" type="text" value="<?php echo $tarefa; ?>">
          <label for="txtdata">Data</label>
          <input name="txtdata" id="txtdata" type="date" value="<?php echo $data_entrega; ?>">
          <input type="submit" value="Gravar">
          <input type="button" value="Consultar" onclick="location.href='consultageral.php'" class="btn">
          <input type="button" value="Página inicial" onclick="location.href='index.html'" class="btn">
        </form>
      </div>
    </div>
  </section>

  </body>
</html>