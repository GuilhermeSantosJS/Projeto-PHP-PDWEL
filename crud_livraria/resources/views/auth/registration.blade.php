<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Livraria | Cadastro de usuário</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/roboto-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-5/css/fontawesome-all.min.css') }}">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>

<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="{{ route('register.custom') }}" method="POST">
				@csrf
				<h2>Criar Conta</h2>
				<div class="form-row">
					<label for="full-name">Nome completo</label>
					<input type="text" name="name" id="name" class="input-text" placeholder="Seu nome" required
						autofocus>
					@if ($errors->has('name'))
					<span class="text-danger">{{ $errors->first('name') }}</span>
					@endif
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Seu Email</label>
					<input type="text" name="email" id="email_address" class="input-text" placeholder="Seu email"
						required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Senha</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Sua senha"
						required>
					@if ($errors->has('password'))
					<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Cadastrar">
				</div>
			</form>
		</div>
	</div>
</body>

</html>