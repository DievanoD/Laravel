<!DOCTYPE html>
<html>
	<head>
		<title>Inserindo</title>
	</head>
	<body>
	<h1>Cadastrar Filme</h1>	

	{{Form::open(['url'=>'movies','method'=>'post'])}}
		{{Form::label('nome', 'Insira o nome:')}}
		{{Form::text('nome', null, ['placeholder'=>'Nome do filme'])}}
		{{Form::label('preco','Insira o preço')}}
		{{Form::text('preco', null,['placeholder'=>'Preço do filme'])}}
		{{Form::submit('Cadastrar')}}
	{{Form::close()}}

	</body>
</html>
