<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livraria | Endereços Cadastrados </title>

    <link rel="stylesheet" href="{{ asset('/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/jquery-ui/jquery-ui.min.css') }}">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/estilo.css') }}" type="text/css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <h2>Meus Endereços</h2>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CEP</th>
                                            <th>Logradouro</th>
                                            <th>Numero</th>
                                            <th>Bairro</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>CEP</th>
                                            <th>Logradouro</th>
                                            <th>Numero</th>
                                            <th>Bairro</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            @foreach($endereco as $enderecos)
                                            <td>{{ $enderecos->id }}</td>
                                            <td>{{ $enderecos->cep }}</td>
                                            <td>{{ $enderecos->logradouro }}</td>
                                            <td>{{ $enderecos->numero }}</td>
                                            <td>{{ $enderecos->bairro }}</td>
                                            <td>{{ $enderecos->cidade }}</td>
                                            <td>{{ $enderecos->estado }}</td>
                                            <td>
                                                <form action="/endereco/ver/{{ $enderecos->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger delete-btn">
                                                        <ion-icon name="trash-outline">Deletar</ion-icon></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
        <script src="{{ asset('/js/endereco.js') }}" type="text/javascript"></script>

        
</body>

</html>