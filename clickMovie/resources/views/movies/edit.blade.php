<!DOCTYPE html>
<html>
	<head>
		<title>Inserindo</title>
	</head>
	<body>
	<h1>Editar Filme</h1>	

	{{Form::open(['url'=>'movies/'. $movie->id,'method'=>'put'])}}
		{{Form::label('nome', 'Insira o nome:')}}
		{{Form::text('nome', $movie->nome, ['placeholder'=>'Nome do filme'])}}
		{{Form::label('preco','Insira o preço')}}
		{{Form::text('preco', $movie->preco,['placeholder'=>'Preço do filme'])}}
		{{Form::submit('salvar')}}
	{{Form::close()}}

	</body>
</html>
