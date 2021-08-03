<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Livraria | Novo livro</title>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/livros/novo">Novo Livro</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu Principal</div>
                        <a class="nav-link collapsed" href="/livros/novo" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Novo Livro
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/livro/ver">Lista</a>
                                <a class="nav-link" href="/livros/novo">Novo</a>
                            </nav>
                        </div>
                        <!--
							<a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Novo link
							</a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Disciplina:</div>
                    PDWEL
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Novo Livro</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Novo Livro</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="/livro/ver"><button type="button" class="btn btn-outline-primary">Lista de Livros</a></button>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Novo Livro</div>
                        <div class="card-body">

                            @if(isset($errors) && count($errors)>0)
                            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                                @foreach($errors->all() as $erro)
                                {{$erro}}<br>
                                @endforeach
                            </div>
                            @endif
                            <form action="{{ route('registrar_livro') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="nome">Nome</label>
                                            <input class="form-control" type="text" name="nome" placeholder="Nome do livro" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="autor">Autor</label>
                                            <input class="form-control" type="text" name="autor" placeholder="Nome do Autor" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="editora">Editora</label>
                                    <input class="form-control" type="text" name="editora" placeholder="Editora do livro" required />
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="isbn">ISBN</label>
                                            <input class="form-control" type="text" name="isbn" placeholder="Informe seu ISBN" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="idioma">Idioma</label>
                                            <input class="form-control" type="text" name="idioma" placeholder="Informe o idioma do livro" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="paginas">Paginas</label>
                                            <input class="form-control" type="text" name="paginas" placeholder="Informe a quantidade de paginas do livro" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="preco">Preco</label>
                                            <input class="form-control" type="text" name="preco" placeholder="Informe o preço do livro" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="avaliacao_livro">Avaliação do livro</label>
                                            <input class="form-control" type="number" name="avaliacao_livro" placeholder="Avalie o Livro" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4 mb-0">
                                    <input class="btn btn-primary btn-block" type="submit" value="Salvar">
                                </div>
                                
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Guilherme Santos</div>
                        <div>
                            Versão 1.0
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/js/datatables-demo.js') }}"></script>
</body>

</html>