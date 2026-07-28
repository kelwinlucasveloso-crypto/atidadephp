<?php 
include "banco.php";

$id = $_GET ['id'];

$sql = "SELECT * FROM funcionario  WHERE id = $id";

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

  <link rel="stylesheet" href="./css/style22.css">
</head>

<body>
  <form action="./atualiza_funcionario.php" method="POST">

    <h1>funcionario</h1>

      <div class="mb-3">
      <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?php echo $cliente['id'] ?>">
    </div>

   <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">nome Completo</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="nome" value="<?php echo $cliente['nome'] ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">cargo</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="cargo" value="<?php echo $cliente['cargo'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">departamento</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="departamento" value="<?php echo $cliente['departamento'] ?>">
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">salario</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="salario" value="<?php echo $cliente['salario'] ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">dia de admissao</label>
      <input type="date" class="form-control" id="exampleInputPassword1" name="admissao" value="<?php echo $cliente['admissao'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">PRONTO</button>
  </form>
</body>

</html>