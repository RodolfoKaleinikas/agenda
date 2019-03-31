<?php
include "conecta_banco.php";
include "header.php";

$comando = "select * from agenda order by id";

$query = $mysqli->query($comando);



?>

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="title">Consulta de tarefas</h1>
        </div>
      </div>
    </div>
  </header>


  <section class="container">
    <div class="row">
      <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <table class="tabela_consulta">
          <tr>
            <th>Id</th> 
            <th>Tarefa</th>
            <th>Data</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>

        <?php 

          while($dados=mysqli_fetch_object($query)) {
            $id = $dados->id;
            echo "<tr><td>" . $dados->id . "</td>";
            echo "<td>" . $dados->tarefa . "</td>";
            echo "<td>" . $dados->data_entrega . "</td>";
            echo "<td><a class='editar' href='editar.php?id=$id'>Editar</a></td>";
            echo "<td><a class='excluir' href='excluir.php?id=$id'>Excluir</a></td></tr>";
          }

          $query->free();

          echo "</table>";
        ?>

        <div class="d-flex justify-content-center btns_consulta">
          <button onclick="location.href='index.html'" class="btn_consulta" href="index.html">Página inicial</button>
          <!-- <button onclick="location.href='editar.php?id='.$id" class="btn_consulta" href="index.html">Editar</button> -->
          <!-- <button onclick="location.href='excluir.php?id='.$id" class="btn_consulta btn_consulta_excluir" href="index.html">Excluir</button> -->
        </div>
      </div>
    </div>
  </section>

  </body>
</html>