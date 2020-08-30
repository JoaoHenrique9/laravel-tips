<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuario</title>
</head>
<body>

<form action=" {{ route('user.store') }} " method="post">
	@csrf
	<label for="">Nome de usuário</label>
	<input type="text" name="name">

	<label for="">E-mail do usuário</label>
	<input type="email" name="email">
	
	<label>Senha do usuário</label>
	<input type="password" name="password">

	<input type="submit" value="Cadastrar usuário">	
</form>

</body>
</html>