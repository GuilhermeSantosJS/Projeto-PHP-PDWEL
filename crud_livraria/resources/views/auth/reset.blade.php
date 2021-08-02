<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Livraria | Redefinir Senha</title>
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
			<form class="form-detail" action="{{ route('reset.password.post') }}" method="POST">
				@csrf
				<h2>Redefinir Senha</h2>
				<div class="form-row">
					<input type="hidden" name="token" value="{{ $token }}">

					<label for="your-email">Seu Email</label>
					<input type="text" name="email" id="email_address" class="input-text" placeholder="Seu email" required autofocus>
					@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
					<i class="fas fa-envelope"></i>
				</div>

				<div class="form-row">
					<label for="password">Senha</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Sua senha" required autofocus>
					@if ($errors->has('password'))
					<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
					<i class="fas fa-lock"></i>
				</div>

				<div class="form-row">
					<label for="password_confirm">Confirmação de Senha</label>
					<input type="password" name="password_confirmation" id="password_confirm" class="input-text" placeholder="Confirmação de senha" required autofocus>
					@if ($errors->has('password_confirmation'))
					<span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
					@endif
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<button type="submit" class="register">Redefinir Senha</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>