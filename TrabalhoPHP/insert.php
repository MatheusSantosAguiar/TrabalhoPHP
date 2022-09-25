<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
        require('conexao.php');

        $Descrição    = $_POST['Descrição'];
        $Marca   = $_POST['Marca'];
        $Estoque = $_POST['Estoque'];
        $Preço   = $_POST['Preço'];

        $erros = 0;
    ?>

    <?php if (is_null($Descrição) OR $Descrição == ''): ?>
        <div class="alert alert-danger" role="alert">Descrição não pode estar em branco.</div>
        <?php $erros++ ?>
    <?php endif; ?>

    <?php if (is_null($Marca) OR $Marca == ''): ?>
        <div class="alert alert-danger" role="alert">A marca não pode estar em branco.</div>
        <?php $erros++ ?>
    <?php endif; ?>
        
    <?php 
        $resultado = false;

        if ($erros == 0) {
            $sql = "INSERT INTO produtos (id, Descrição, Marca, Estoque, Preço) 
                VALUES (null , '$Descrição', '$Marca', '$Estoque', '$Preço')";
        
            $resultado = mysqli_query($conexao, $sql);
        }        
    ?>

    <?php if ($resultado): ?>
        <div class="alert alert-success" role="alert">Descrição cadastrada.</div>
        <a href="select.php" class="btn btn-primary">Lista de Produtos</a>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">Erro!</div>
        <a href="cadastrar.php" class="btn btn-primary">Tentar novamente</a>
    <?php endif; ?>
    
</body>
</html>