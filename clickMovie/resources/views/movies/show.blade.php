<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>pagina</title>
	</head>
	<body>

		<h1>{{$movie->nome}}</h1>

		<p>{{$movie->preco}}</p>


		{{Form::open(['url'=>'movies/'.$movie->id,'method'=>'delete'])}}	
		{{Form::submit('excluir')}}
		{{Form::close()}}

	</body>
</html>