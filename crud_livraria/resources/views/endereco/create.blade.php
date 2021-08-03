<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livraria | Cadastrar Endereco </title>

    <link rel="stylesheet" href="{{ asset('/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/jquery-ui/jquery-ui.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/estilo.css') }}" type="text/css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('cadastrar_endereco') }}" class="signup-form">
                        @csrf
                        <h2>Cadastro de Endereço</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-input" name="cep" id="cep" placeholder="Informe o cep" required />
                            </div>
                            <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-input" name="logradouro" id="logradouro" placeholder="Informe o logradouro" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="numero">Numero</label>
                                <input type="number" class="form-input" name="numero" id="numero" placeholder="Informe o numero" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-input" name="bairro" id="bairro" placeholder="Informe o bairro" required />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-input" name="cidade" id="cidade" placeholder="Informe a cidade" required />
                            </div>
                            <div class="form-group">
                                <label for="uf">Estado</label>
                                <select id="uf" name="estado">
                                    <option>SELECIONE O ESTADO</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-submit" value="Salvar" />
                        </div>
                </div>
            </div>

            </form>
    </div>
    </section>

    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('/js/endereco.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $("#cep").focusout(function() {
            $.ajax({
                url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
                dataType: 'json',
                success: function(resposta) {
                    $("#logradouro").val(resposta.logradouro);
                    $("#complemento").val(resposta.complemento);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#uf").val(resposta.uf);
                    $("#numero").focus();

                }
            });
        });
    </script>
</body>

</html>