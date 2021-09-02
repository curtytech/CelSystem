@extends('layouts.main')

@section('title', 'Compras Show')

@section('content')

<div class="container  mt-4 ">
    <h1 class=" font">Tabela de Compras</h1>

    <a class="btn btn-outline-dark my-2" href="{{ route('createCompra') }}"> Nova Compra </a>
</div>
<div class="container mt-3">

    <table class="table table-striped border border-dark rounded" id="dataTable">
        <thead class="bg-dark text-light">
            <tr>
                <th class="text-center">Data:</th>
                <th class="text-center">Produto:</th>
                <th class="disableMobile text-center">Comprovante:</th>
                <th class="disableMobile text-center">Fornecedor:</th>
                <th class="text-center">Ações:</th>
            </tr>
        </thead>

        <tbody>

        <!-- Falta alterar -->
            @foreach($compras as $compra)
            <tr>
                <td class="text-center">{{$compra->nomeCliente}}</td>
                <td class="text-center">{{$compra->telefoneCliente}}</td>
                <td class="text-center">{{$compra->servico[0]}}</td>
                <td class="text-center">{{$compra->valTotalServicoEMaterial}}</td>

                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('pdfServico', ['id'=>$compra->id])}}"> <i class="far fa-file-pdf"></i> </a>
                    <a class="btn btn-primary" href="{{ route('verServico', ['id'=>$compra->id])}}"> <i class="fas fa-eye"></i> </a>
                    <a class="btn btn-primary" href="{{ route('editarServico', ['id'=>$compra->id])}}"><i class="fas fa-edit"></i> </a>
                    <a class="btn btn-danger" href="{{ route('excluirServico', ['id'=>$compra->id])}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>

            @endforeach
            @if(count($compras) == 0)
            <h4 class="text-center ">Não consta nenhuma Compra na lista!</h4>
            <hr>
            @endif

        </tbody>
    </table>

</div>
@endsection