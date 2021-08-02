<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Livraria | Link Recuperar Senha</title>
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
				<h2>Verificar o endereço de email</h2>
                @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('um link de verificação foi enviado para seu endereço de email.') }}
                        </div>
                    @endif
                    <a href="{{ route('reset.password.get', $token) }}">Clique aqui</a>.
		</div>
	</div>
</body>

</html>