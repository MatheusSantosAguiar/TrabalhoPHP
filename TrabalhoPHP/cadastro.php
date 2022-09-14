<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="card m-4 bg-secondary"> 
      <div class="card-body">
        <form action="insert.php" method="post">
          <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descricao</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
          </div>
          <div class="mb-3">
            <label for="marca" class="form-label">Marca: </label>
            <input type="text" class="form-control" id="marca" name="marca">
          </div>
          <div class="mb-3">
            <label for="estoque" class="form-label">Estoque: </label>
            <input type="text" class="form-control" id="estoque" name="estoque">
          </div>
          <div class="mb-3">
            <label for="preco" class="form-label">Preco</label>
            <input type="text" class="form-control" id="preco" name="preco">
          </div>
          <div class="mb-3 ">
            <input type="submit" class="form-control w-25 bg-primary">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
