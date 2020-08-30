<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Listagem de Usuarios</title>
</head>
<body>
	<table>
		<tr>
			<td>#ID</td>
			<td>Nome:</td>
			<td>E-mail:</td>
			<td>Ações:</td>
		</tr>
		<tr>
			@foreach($users as $user)
			<td>{{ $user->id }} </td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>

			<td>
				<a href="{{route('user.show',['user' => $user->id])}} ">Ver Usuário</a>
				<form action="{{route('user.destroy',['user' => $user->id] ) }} " method="post">
					@csrf
					@method('delete')
					<input type="hidden" name="user">
					<input type="submit" value="Remover">	
				</form>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>