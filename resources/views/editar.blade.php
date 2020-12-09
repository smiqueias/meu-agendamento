<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>meuagendamento - Editar Agendamento</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}" />
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/hamburgers.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/animsition.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
      <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/images/bg-01.jpg');">
            <div class="wrap-login100-3 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Editar Agendamento
                </span>
                <div class="container">
                    <form action="{{route('update_task', ['id' => $task->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Compromisso</label>
                            <textarea class="form-control" placeholder="informe seu compromisso" name="compromisso" id="compromisso" {{$task->compromisso}} rows="3" required>{{$task->compromisso}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <div>
                                <input class="form-control" type="date" name="data" id="data" value = {{$task->data}} required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Enviar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                        <a id="btn-voltar" class="btn btn-primary" href="{{route('show_all_tasks')}}" role="button">Voltar</a>
                        <div id="mensagem">
                            @include('flash::message') 
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div id="dropDownSelect1"></div>

       <!--===============================================================================================-->
       <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('js/animsition.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('js/popper.js')}}"></script>
       <script src="{{asset('js/bootstrap.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('js/select2.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('js/moment.min.js')}}"></script>
       <script src="{{asset('js/daterangepicker.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('js/countdowntime.js')}}"></script>
       <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
