@extends('layouts.main')

@section('title', 'Produtos Show')

@section('content')

<div class="container  mt-4 ">
    <h1 class=" font">Tabela de Produtos</h1>

    <a class="btn btn-outline-dark my-2" href="{{ route('createproduto') }}"> Novo Produto nem vai funcionar </a>
</div>
<div class="container mt-3">

    <table class="table table-striped border border-dark rounded" id="dataTable">
        <thead class="bg-dark text-light">
            <tr>
            <th class="text-center">Produto:</th>
                <th class="disableMobile text-center">Categoria:</th>
                <th class="text-center">Estoque:</th>
                <th class="disableMobile text-center">Preço Unitário:</th>
                <th class="disableMobile text-center">Preço de Venda:</th>
                <th class="text-center">Ações:</th>

            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td class="text-center">{{$produto->nomeCliente}}</td>
                <td class="text-center">{{$produto->telefoneCliente}}</td>
                <td class="text-center">{{$produto->produto[0]}}</td>
                <td class="text-center">{{$produto->valTotalprodutoEMaterial}}</td>

                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('pdfProduto', ['id'=>$produto->id])}}"> <i class="far fa-file-pdf"></i> </a>
                    <a class="btn btn-primary" href="{{ route('verProduto', ['id'=>$produto->id])}}"> <i class="fas fa-eye"></i> </a>
                    <a class="btn btn-primary" href="{{ route('editarProduto', ['id'=>$produto->id])}}"><i class="fas fa-edit"></i> </a>
                    <a class="btn btn-danger" href="{{ route('excluirProduto', ['id'=>$produto->id])}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            
            @endforeach
            @if(count($produtos) == 0)
                <h4 class="text-center ">Não consta nenhum produto na lista!</h4>
                <hr>
            @endif

        </tbody>
    </table>

</div>
@endsection