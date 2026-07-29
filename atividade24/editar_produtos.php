<?php 
include "banco.php";

$id = $_GET ['id'];

$sql = "SELECT * FROM produtos  WHERE id = $id";

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

  <link rel="stylesheet" href="./css/style24.css">
</head>

<body>
  <form action="./atualiza_produtos.php" method="POST">

    <h1>PRODUTOS</h1>

      <div class="mb-3">
      <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $cliente['id'] ?>">
    </div>

   <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">nome Completo</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="nome" value="<?php echo $cliente['nome'] ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">categoria</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="categoria" value="<?php echo $cliente['categoria'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">quantidade</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="categoria" value="<?php echo $cliente['quantidade'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">preco</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="preco" value="<?php echo $cliente['preco'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">PRONTO</button>
  </form>
</body>

</html>