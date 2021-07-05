<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Criar Novos Livros</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
</head>
<body>
<h1 style="color:blue;text-align:center;">Criar Novos Livros</h1><br>

<div class="container-fluid h-100 bg-light text-dark">
  <div class="row justify-content-center align-items-center">

		<form action="{{ route('store') }}" method="post" role="form" >
		 	@csrf

			<div class="form-group">
			<label for="isbn">ISBN</label>
			<input type="text" class="form-control" id="isbn" name="isbn"placeholder="isbn">
			</div>

			<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
			</div>

			<div class="form-group">
			<label for="autor">Autor</label>
			<input type="text" class="form-control" id="autor" name="autor" placeholder="autor">
			</div>

			<div class="form-group">
			<label for="preco">Preço</label>
			<input type="text" class="form-control" id="preco" name="preco" placeholder="preco">
			</div>

			<button type="submit" class="btn btn-primary">Criar</button>

		</form>
	</div>
</div>	

	
</body>
</html>