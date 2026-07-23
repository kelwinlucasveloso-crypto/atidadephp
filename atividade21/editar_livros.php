<?php 
include "banco.php";

$id = $_GET ['id'];

$sql = "SELECT * FROM livros WHERE id = $id";

$resultado = $conexao -> query($sql); 

$cliente = $resultado -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <form action="./salvar_livros.php" method="POST">

    <h1>LIVROS DE TABALHA </h1>

      <div class="mb-3">
      <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $cliente['id'] ?>">
    </div>

   <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">titulo de livros</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="titulo" value="<?php echo $cliente['titulo'] ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">autor</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="autor" value="<?php echo $cliente['autor'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">editora</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="editora" value="<?php echo $cliente['editora'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ano de publicacao</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="ano" value="<?php echo $cliente['ano'] ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">quantidade de pagina</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="quantidade" value="<?php echo $cliente['quantidade'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">livros de tabalho</button>
  </form>
</body>

</html>