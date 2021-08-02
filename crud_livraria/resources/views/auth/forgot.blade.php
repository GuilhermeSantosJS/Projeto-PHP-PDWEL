<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Livraria | Recuperar Senha</title>
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
			<form class="form-detail" action="{{ route('forgot-password') }}" method="POST">
				@csrf
				<h2>Recuperar Senha</h2>
				<div class="form-row">
					<label for="your-email">Seu Email</label>
					<input type="email" name="email" id="email_address" class="input-text" placeholder="Seu email" required autofocus>
					@if ($errors->has('email'))
					<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row-last">
					<button type="submit" class="register">Enviar</button>
				</div>
				<div class="text-center p-t-136">
					<a class="txt2" href="/login">
						Fazer Login
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</body>

</html>