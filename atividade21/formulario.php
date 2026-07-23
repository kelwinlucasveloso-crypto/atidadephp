<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVROS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style21.css">
</head>
<body>
    <form action="./salvar_livros.php" method="POST">

    <h1>LIVROS</h1>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">titulo de livros</label>
<input type="text" class="form-control" id="exampleInputPassword1" aria-describedby=""name="titulo" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">autor</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="autor" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">editora</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="editora">
  </div>

  
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ano de publicacao</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="ano">
  </div>
 

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">quantidade de paginas</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="quantidade">
  </div>

   
  <button type="submit" class="btn btn-primary">Pronto</button>
</form>
</body>
</html>