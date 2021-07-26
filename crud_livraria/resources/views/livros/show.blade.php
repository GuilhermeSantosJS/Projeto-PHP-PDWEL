<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Livraria | Lista de livros</title>
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/livro/ver">Listagem de Livros</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu Principal</div>
                        <a class="nav-link collapsed" href="/dashboard" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Lista de Livros
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
                    <h1 class="mt-4">Livro</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Listagem de Livros</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="/livros/novo"><button type="button" class="btn btn-outline-primary">+ Livro</a></button>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fa fa-list-ul"></i> Lista de Livros</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>ISBN</th>
                                            <th>Idioma</th>
                                            <th>Paginas</th>
                                            <th>Preco</th>
                                            <th>Avaliação do Livro</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>ISBN</th>
                                            <th>Idioma</th>
                                            <th>Paginas</th>
                                            <th>Preco</th>
                                            <th>Avaliação do Livro</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            @foreach($livros as $livro)
                                            <td>{{ $livro->id }}</td>
                                            <td>{{ $livro->nome }}</td>
                                            <td>{{ $livro->autor }}</td>
                                            <td>{{ $livro->editora }}</td>
                                            <td>{{ $livro->isbn }}</td>
                                            <td>{{ $livro->idioma }}</td>
                                            <td>{{ $livro->paginas }}</td>
                                            <td>{{ $livro->preco }}</td>
                                            <td>{{ $livro->avaliacao_livro }}</td>


                                            <td>
                                                <a href="{{ route('alterar_livro', ['id' => $livro->id]) }}"><button type="submit" class="btn btn-outline-primary">
                                                        <ion-icon name="trash-outline">Editar</ion-icon></button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="/livro/ver/{{ $livro->id }}" method="POST">
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
    <script src="{{ asset('/js/delete_livro.js') }}"></script>

</body>

</html>