<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    < src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></>
  </head>
  <body>
    <div class="card m-4"> 
      <div class="card-body">
        <table class="table table-dark table-striped">
          <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>E-mail</td>
              <td>Usuário</td>
              <td>Opções</td>
          </tr>
          <?php
          require('conexao.php');
          $resultado = mysqli_query($conexao, 'SELECT * FROM produtos ORDER BY id ASC');

          while($registro = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
            echo '<td>'.$registro['id'].'</td>';
            echo '<td>'.$registro['nome'].'</td>';
            echo '<td>'.$registro['email'].'</td>';
            echo '<td>'.$registro['user'].'</td>';
            echo '<td><a href="delete.php?id='.$registro['id'].'">Excluir</a></td>';
            echo '</tr>';
          }
          ?>
        </table>
      </div>
      <div class="card-footer">
        <a href="cadastro.php" class="btn btn-primary">Novo Cadastro</a>
      </div>
    </div>
  </body>
</html>
