<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vitrine de Livros</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<h1>Lista de livros</h1><br>
	<table class="table tabel-bordered table-striped">
		<thead >
			<tr>
				<th scope="col">#</th>
				<th scope="col">Isbn</th>
				<th scope="col">Nome</th>
				<th scope="col">Autor</th>
				<th scope="col">Preço</th>
				<th scope="col">Ações</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<th>123</th>
				<th>Nome do livro</th>
				<th>Autor do livro</th>
				<th>R$90,00</th>
				<th>
					<a class="btn btn-primary" href="/livros/edit" role="button">Editar</a>
					<a class="btn btn-danger" href="#" role="button">Excluir</a>
					<a class="btn btn-success" href="/livros/create" role="button">Novo</a>

				</th>


			</tr>
		</tbody>
		
	</table>
	

	
</body>
</html>