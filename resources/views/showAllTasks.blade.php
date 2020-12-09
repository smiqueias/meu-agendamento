<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <title>meuagendamento - Pesquisar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animsition.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <!--===============================================================================================-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
        <!-- Modal -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/bg-01.jpg');">
            <div class="wrap-login100-2 p-t-30 p-b-50">
                <img id="logo" src="{{ asset('/images/icons/logo.png') }}" alt="logo">

                <form class="login100-form2 validate-form p-b-33 p-t-5" action="{{ route('show_all_tasks') }}">
                    <div id="container-form">

                        <span id="titulo" class="login100-form-title p-b-41">
                            Pesquisar Agendamento
                        </span>
                        <!-- Caixa de pesquisa -->
                        <div class="form-group">
                            <div class="form-group has-search">
                                <span class="form-control-feedback material-icons">search</span>
                                <input id="tableSearch" type="text" class="form-control" placeholder="Pesquisar">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="tabela" class="table table-hover" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Compromisso</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Excluir</th>
                                    </tr>
                                </thead>

                                <tbody id='myTable'>

                                    @forelse ($tasks as $tasks)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $tasks->compromisso }}</td>
                                            <td>{{ date('d/m/y', strtotime($tasks->data)) }}</td>

                                            <td id="alterar">
                                                <a id="alterar" href="{{route("show_task", ['id' => $tasks->id])}}"><i class="material-icons">edit</i></a>  
                                            </td>

                                            <td id="excluir">
                                                
                                               <a id="excluir" href="{{route('delete_task', ['id' => $tasks->id])}}" class="excluir">
                                                    <i class="material-icons">delete</i>
                                                </a>

                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5">
                                                Nenhum Resultado encontrado
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="container">
                            <a id="btn-voltar" class="btn btn-primary" href="{{ route('menu_screen') }}"
                                role="button">Voltar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--===============================================================================================-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--===============================================================================================-->
</body>
</html>
