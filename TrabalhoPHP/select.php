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
          ?>

          <?php while($registro = mysqli_fetch_assoc($resultado)): ?>
            <tr>
            <td><?=$registro['id']?></td>
            <td><?=$registro['descricao']?></td>
            <td><?=$registro['marca']?></td>
            <td><?=$registro['preco']?></td>           
            <td><a href="editar.php?id=<?=$registro['id']?>" class="btn btn-warning">Editar</a></td>
            <td><a href="delete.php?id=<?=$registro['id']?>" class="btn btn-danger">Excluir</a></td>
          <?php endwhile; ?>

        </table>
      </div>
      <form action="cadastro.php">
        <input type="submit" value="Novo cadastro">
      </form>
    </div>
  </body>
</html>
