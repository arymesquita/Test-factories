<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Livros</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
</head>
<body>
<h1 style="color:blue;text-align:center;">Editar Livros</h1><br>

<div class="container-fluid h-100 bg-light text-dark">
  <div class="row justify-content-center align-items-center">

		<form action="" method="POST" role="form" >

			<div class="form-group">
			<label for="isbn"></label>
			<input type="text" class="form-control" id="isbn" placeholder="isbn">
			</div>

			<div class="form-group">
			<label for="nome"></label>
			<input type="text" class="form-control" id="nome" placeholder="nome">
			</div>

			<div class="form-group">
			<label for="autor"></label>
			<input type="text" class="form-control" id="autor" placeholder="autor">
			</div>

			<div class="form-group">
			<label for="preco"></label>
			<input type="text" class="form-control" id="preco" placeholder="preco">
			</div>

			<button type="submit" class="btn btn-primary">Editar</button>

		</form>
	</div>
</div>	

	
</body>
</html>