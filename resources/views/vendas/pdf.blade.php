<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota do Serviço</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <style>
        @page {
            font-family: FreeSans, Verdana, Comic Sans MS;
        }
        h1, h2, h3, h4, h5, h6, label, strong, hr{
            color: #2B999A;
        }

        label {
            font-weight: bold
        }

        .container {
            width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .text-right {
            text-align: right;
            margin-right: 200px;
        }

        .conteudo-left {
            width: 350px;
            height: auto;
            float: left;
        }

        .conteudo-right {
            width: 350px;
            height: auto;
            float: left;
        }

        .tabela {
            width: 150px;
            height: auto;
            float: left;
        }

        #divFloat {
            height: auto;
            float: left;
        }

    </style>
</head>

<body>
    <div>
        <h1> Nota do Serviço </h1>

        <h2 style="margin-top: 50px;"> Dados do Cliente </h2>
    </div>
    <div style="margin-left: 450px; margin-top: -300px; ">
        <img class="" src="C:\xampp\htdocs\needleOffice-7\public\logoEmpresa.jpeg" alt="" width="" height="150">
    </div>

    <div>
        <div class="conteudo-left">
            <p> <strong> Nome do Cliente: </strong> {{ $servicos->nomeCliente}}</p>
            <p> <strong> Data de Pedido: </strong> {{date('d/m/Y', strtotime($servicos->dataPedido))}}</p>
            <hr>
        </div>

        <div class="conteudo-right">
            <p> <strong> Telefone: </strong> {{ $servicos->telefoneCliente}}</p>
            <p> <strong> Data de Entrega: </strong> {{date('d/m/Y', strtotime($servicos->dataEntrega))}}</p>
            <hr>
        </div>
    </div>

    <div class="container">
        <h2 style="margin-bottom: -10px;"> Dados do Serviços </h2>
        <div class="tabela  ">
            <h3 class="">Serviços</h3>
            @foreach ($servicos->servico as $service)
            <t class="">{{$service}}</t> <br>
            @endforeach
        </div>

        <div class="tabela ">
            <h3 class="">Descrição</h3>
            @foreach ($servicos->descServico as $descService)
            <t class="">{{$descService}}</t> <br>
            @endforeach
        </div>

        <div class="tabela ">
            <h3 class="">Quantidade</h3>
            @foreach ($servicos->qtdServico as $qtdService)
            <t style="text-align: center;">{{$qtdService}}</t> <br>
            @endforeach

        </div>

        <div class="tabela  ">
            <h3 class="">Valor do Serviço</h3>
            @foreach ($servicos->valServico as $valService)
            <t class="">R$: {{$valService}}</t> <br>
            @endforeach
            <br>
            <label class="">Total: </label> <br>
        </div>

        <div class="tabela  margin-right">
            <h3 class="">Total do Serviço</h3>
            @foreach ($servicos->valTotalServico as $valTotalService)
            <t class="">R$: {{$valTotalService}}</t> <br>
            @endforeach
            <br>
            <t class="">R$: {{$servicos->valTotalServicos}}</t> <br>
        </div>
    </div>

    <div>
        <hr style="margin-top: 200px;" id="divFloat">
        <hr>
        <h2 style="margin-bottom: 10px;"> Dados do Financeiros </h2>
        <div class="">
            <table class="" style="width: 100%;">
                <tr>
                    <th class=""><label>Sinal: </label></th>
                    <th class=""><label>Restante: </label></th>
                    <th class=""><label>Frete: </label></th>
                    <th class=""><label>Valor Total: </label></th>
                </tr>
                <tr>
                    <td style="text-align: center;">R$: {{ $servicos->sinal}}</td>
                    <td style="text-align: center;">R$: {{ $servicos->restante}}</td>
                    <td style="text-align: center;">R$: {{ $servicos->frete}}</td>
                    <td style="text-align: center;">R$: {{ $servicos->valTotalServicoEMaterial}}</td>
                </tr>
            </table>
        </div>
    </div>



</body>

</html>