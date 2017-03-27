<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Filmes</title>
</head>
	<body>

		@foreach($movies as $movie)
		<tr>
			<td> <h1>{{$movie->nome}}</h1> </td>

			<td> <p>{{$movie->preco}}</p> </td>
		</tr>
		@endforeach
		
	</body>
</html>