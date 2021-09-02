<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- BootsTrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- DataTables -->
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Meu Css -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wgt@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">SisCel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos/show">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/compras/show">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos/show">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos/show">Vendas</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf
                            <a class="nav-link text-right" href="/logout" onclick="event.preventDefault();
                                this.closest('form').submit();">Log Out</a>
                        </form>
                    </li>
                </ul>
                <div class="text-right">
                    <li class="nav navbar-nav ml-auto w-100 justify-content-end">

                    </li>
                </div>
                </ul>

                <div>
                <div class="row">
                    <!-- <h6 class="text-light ml-3 mr-4">Bem-Vindo, </h6>
                    <a href="../requires/login/logout.php"> <i class="text-danger fas fa-sign-out-alt"></i> </a> -->
                </div>
            </div>

            </div>
        </div>
    </nav>


    <main>
        <div class="container mt-2">
            <div class="row">
                @if(session('msg'))
                <div class="text-center msg alert alert-primary" role="alert">
                    {{session('msg')}}
                </div>
                @endif
            </div>
        </div>
    </main>

    @yield('content')


    <!-- <footer style=" position:absolute;    bottom:0;    width:100%; ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <p class="text-light ml-5"> &copy; Phelipe Curty {{ date('Y') }} </p>
        </nav>

    </footer> -->
    @push('scripts')

    @endpush

    <!-- <script src="{{asset('js/configDataTable.js')}} "></script> -->

    <!-- Jquery
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <!-- Data Tables -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/configDataTable.js')}}"> </script>

    <!-- Minhas Funções Jquery -->
    <!-- <script src="{{asset('js/functionsCreate.js') }}"> </script> -->

    <!-- JqueryMask -->
    <script src="{{asset('js/configJQueryMask.js')}}"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- BootsTrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>