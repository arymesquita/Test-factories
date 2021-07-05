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
	<h1 style="color:blue;text-align:center;">Lista de Livros</h1><br><br>
	<table class="table tabel-bordered table-striped text-center">
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
			@foreach($livros as $livro)
				<tr>
					<th scope="row">{{ $livro->id }}</th>
					<th>{{ $livro->isbn }}</th>
					<th>{{ $livro->nome }}</th>
					<th>{{ $livro->autor }}</th>
					<th>{{ number_format($livro->preco, 2, ',', '.') }}</th>
					<th>
						<a class="btn btn-primary" href="{{ route('editar',['id'=>$livro->id]) }}" role="button">Editar</a>
						<a class="btn btn-danger" href="{{ route('deletar', ['id'=>$livro->id]) }}" role="button">Excluir</a>
						<a class="btn btn-success" href="{{ route('criar') }}" role="button">Novo</a>

					</th>



				</tr>
			@endforeach
		</tbody>
		
	</table>
	

	
</body>
</html>