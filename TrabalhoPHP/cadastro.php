<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="cardm-4bg-secondary"> 
      <div class="card-body">
        <form action="insert.php" method="post">
            <input type="text" name="ID" placeholder="ID do produto">
            <input type="text" name="Descrição" placeholder="Descrição do produto">
            <input type="text" name="Marca" placeholder="Insira a marca">
            <input type="text" name="Estoque" placeholder="Quantidade em estoque">
            <input type="text" name="Preço" placeholder="Preço do produto">
            <input type="submit" value="Cadastrar">
        </form>
      </div>
    </div>
  </body>
</html>
