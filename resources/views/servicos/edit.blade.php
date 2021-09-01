@extends('layouts.main')

@section('title', 'Editar Serviço')

@section('content')

<div class="container">
    <h3 class="mb-3 mt-3">Editar Pedido </h3>

    <form action="{{ route('atualizarServico', ['id' => $servicos->id]) }}" method="post">
        @csrf
        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Cliente </h5>
            <div class="col-9">
                <label class="form-label">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" value="{{$servicos->nomeCliente}}" required>
            </div>
            <div class="col-3">
                <label class="form-label">Telefone:</label>
                <input type="text" class="form-control cel" id="telefoneCliente" name="telefoneCliente" value="{{$servicos->telefoneCliente}}">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label class="form-label">Data do Pedido</label>
                <input type="date" class="form-control" id="dataPedido" name="dataPedido" value="{{$servicos->dataPedido}}">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data da Entrega</label>
                <input type="date" class="form-control" id="dataEntrega" name="dataEntrega" value="{{$servicos->dataEntrega}}">
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados do Serviço </h5>

            <div class="col-md-3">
                @foreach ($servicos->servico as $service)
                <div class=" wrapper mb-2">
                    <label class="form-label">Serviço:</label>
                    <input type="text" class="form-control" id="servico" name="servico[]" value="{{$service}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-3">
                @foreach ($servicos->descServico as $descService)
                <div class=" wrapper mb-2">
                    <label class="form-label">Descrição do Serviço:</label>
                    <input type="text" class="form-control" id="descServico" name="descServico[]" value="{{$descService}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-2">
                @foreach ($servicos->qtdServico as $qtdService)
                <div class=" wrapper mb-2">
                    <label class="form-label">Quantidade do Serviço:</label>
                    <input type="text" class="form-control qtdServico" id="qtdServico" name="qtdServico[]" value="{{$qtdService}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-2">
                @foreach ($servicos->valServico as $valService)
                <div class=" wrapper mb-2">
                    <label class="form-label">Valor do Serviço:</label>
                    <input type="text" class="form-control valServico " id="valServico" name="valServico[]" value="{{$valService}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-2">
                @foreach ($servicos->valTotalServico as $valTotalService)
                <div class=" wrapper mb-2">
                    <label class="form-label">Valor Total do Serviço:</label>
                    <div class="input-group mb-2 col-3">
                        <span class="input-group-text" id="basic-addon1">R$:</span>
                        <input type="text" class="form-control valTotalServico"  id="valTotalServico" name="valTotalServico[]" value="{{$valTotalService}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <!-- <input type="button" onclick="addServico()" class=" btn btn-secondary btn-sm" value="Adicionar mais serviços "> -->
            </div>
            <div class="col-3 d-grid gap-2"> <label class="form-label"></label>
                <!-- <input type="button" id="removeServico" class=" btn btn-secondary btn-sm" value="Remover serviços "> -->
            </div>
            <div class="col-md-3">
                <label class="form-label">Valor Total de Serviços:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="valTotalServicos" name="valTotalServicos" value="{{$servicos->valTotalServicos}}">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row">
            <h5 class="mb-3 mt-3"> Dados dos Materiais </h5>

            <div class="col-md-3 ">
                @foreach ($servicos->material as $material)
                <div class=" wrapper mb-2">
                    <label class="form-label">Material:</label>
                    <input class="form-control" id="material" name="material[]" value="{{$material}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-3 ">
                @foreach ($servicos->qtdMaterial as $qtdMaterial)
                <div class=" wrapper mb-2">
                    <label class="form-label">Quantidade do Material:</label>
                    <input type="text" class="form-control qtdMaterial" id="qtdMaterial" name="qtdMaterial[]" value="{{$qtdMaterial}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-3 ">
                @foreach ($servicos->valMaterial as $valMaterial)
                <div class=" wrapper mb-2">
                    <label class="form-label">Valor Material:</label>

                    <input type="text" class="form-control valMaterial" id="valMaterial" name="valMaterial[]" value="{{$valMaterial}}">
                </div>
                @endforeach
            </div>

            <div class="col-md-3 ">
                @foreach ($servicos->valTotalMaterial as $valTotalMaterial)
                <div class=" wrapper ">
                    <label class="form-label">Valor Total do Material:</label>
                    <div class="input-group mb-2 col-3">
                        <span class="input-group-text" id="basic-addon1">R$:</span>
                        <input type="text" class="form-control valTotalMaterial" id="valTotalMaterial" name="valTotalMaterial[]" value="{{$valTotalMaterial}}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <!-- <input type="button" id="addMaterial" class=" btn btn-secondary btn-sm" value="Adicionar mais material "> -->
            </div>
            <div class="col-3 d-grid gap-2">
                <label class="form-label"></label>
                <!-- <input type="button" id="removeMaterial" class=" btn btn-secondary btn-sm" value="Remover material"> -->
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total de Materiais:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control valTotalMateriais" id="valTotalMateriais" name="valTotalMateriais" value="{{$servicos->valTotalMateriais}}">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="row mb-3 ">
            <h5 class="mb-3 mt-3"> Dados do Financeiros </h5>
            <div class="col-md-3">
                <label class="form-label">Sinal:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="sinal" name="sinal" value="{{$servicos->sinal}}">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Restante:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="restante" name="restante" value="{{$servicos->restante}}">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Frete:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="frete" name="frete" value="{{$servicos->frete}}">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Total:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control valTotalServicoEMaterial" id="valTotalServicoEMaterial" name="valTotalServicoEMaterial" value="{{$servicos->valTotalServicoEMaterial}}">
                </div>
            </div>
        </div>
        <div class="my-2 row">
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3"> </div>
            <div class="col-md-3 row">
                <button class="float-right btn btn-primary" type=" submit">Salvar</button>
            </div>
        </div>
    </form>

</div>


<!-- Functions -->
<script src="{{asset('js/functionsEdit.js')}}"> </script>

@endsection