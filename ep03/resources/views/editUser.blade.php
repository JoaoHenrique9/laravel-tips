<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Usuario</title>
</head>
<body>

<form action=" {{ route('users.edit',['user' => $user->id]) }} " method="post">
	@csrf
	@method('PUT')
	
	<label for="">Nome de usuário</label>
	<input type="text" name="name" value="{{$user->name}} ">

	<label for="">E-mail do usuário</label>
	<input type="email" name="email" value="{{$user->email}}">
	
	<label>Senha do usuário</label>
	<input type="password" name="password">

	<input type="submit" value="Editar usuário">	
</form>

</body>
</html>