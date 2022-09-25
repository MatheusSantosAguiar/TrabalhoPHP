<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="styleselect.css">
  </head>
  <body>
    <div class="card m-4"> 
      <div class="card-body">
        <table class="table table-dark table-striped">
          <tr>
              <td>ID</td>
              <td>Descrição</td>
              <td>Marca</td>
              <td>Preço</td>
              <td>Opções</td>
          </tr>
          <?php
          require('conexao.php');
          $resultado = mysqli_query($conexao, 'SELECT * FROM produtos ORDER BY id ASC');

          while($registro = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>'.$registro['id'].'</td>';
            echo '<td>'.$registro['Descricao'].'</td>';
            echo '<td>'.$registro['Marca'].'</td>';
            echo '<td>'.$registro['preco'].'</td>';
            echo '<td><a href="delete.php?id='.$registro['id'].'">Excluir</a></td>';
            echo '</tr>';
          }
          ?>
        </table>
      </div>
      <form action="cadastro.php">
        <input type="submit" value="Novo cadastro">
      </form>
    </div>
  </body>
</html>
