@extends('layouts.main')

@section('title', 'Criar Serviço')

@section('content')

<div class="container">
    <h2 class="font mb-3 mt-4">Adicionar Pedido </h2>

    <form action="{{ route('salvarServico') }}" method="post">
        @csrf
        <div class="row">
            <h5 class="font mb-3 mt-2"> Dados do Cliente </h5>
            <div class="col-9">
                <label class="form-label">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" value="" required>
            </div>
            <div class="col-3">
                <label class="form-label ">Telefone:</label>
                <input type="text" class="cel form-control" id="telefoneCliente" name="telefoneCliente" value="">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-4">
                <label class="form-label">Categoria:</label>

                <select class="form-select " name="categoria_servico">
                    <option value="Computadores e Notebooks"> Computadores e Notebooks </option>
                    <option value="Celulares e Tablets"> Celulares e Tablets </option>
                    <option value="Design"> Design </option>
                    <option value="Programação"> Programação </option>
                    <option value="Outros"> Outros </option>
                </select>

            </div>
            <div class="col-4">
                <label class="form-label ">Marca:</label>
                <input type="text" class="form-control" name="marca" value="">
            </div>
            <div class="col-4">
                <label class="form-label ">Modelo:</label>
                <input type="text" class="form-control" name="modelo" value="">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6 ">
                <label class="form-label">Data do Pedido</label>
                <input type="date" class="form-control" id="dataPedido" name="dataPedido" value="">
            </div>

            <div class="col-sm-6">
                <label class="form-label">Data da Entrega</label>
                <input type="date" class="form-control" id="dataEntrega" name="dataEntrega" value="">
            </div>
        </div>

        <hr class="my-4">

        <div class="fields">

            <div id="dadosDoServico" class="row">
                <h5 class="font mb-3 "> Dados dos Serviços </h5>

            </div>
        </div>


        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <input type="button" onclick="addServico()" class="btn btn-primary btn-sm" value="Adicionar Serviços ">
            </div>
            <div class="col-3 d-grid gap-2"> <label class="form-label"></label>

            </div>
            <div class="col-md-3">
                <label class="form-label">Valor Total de Serviços:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control valTotalServicos" readonly id="valTotalServicos" name="valTotalServicos">
                </div>

            </div>
        </div>

        <hr class="my-4">

        <div class="row" id="dadosDoMaterial">
            <h5 class="font mb-3"> Dados dos Materiais </h5>


        </div>

        <div class="row  mt-3">
            <div class="col-6 d-grid gap-2">
                <label class="form-label"></label>
                <input type="button" onclick="addMaterial()" class=" btn btn-primary btn-sm" value="Adicionar Material ">
            </div>
            <div class="col-3 d-grid gap-2">
                <label class="form-label"></label>
            </div>

            <div class="col-md-3">
                <label class="form-label">Valor Total dos Materiais:</label>

                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" readonly id="valTotalMateriais" name="valTotalMateriais">
                </div>
            </div>
        </div>

        <hr class="my-4">
        <!-- Dados do Financeiros -->
        <div class="row mb-3 ">
            <h5 class="font mb-3 "> Dados do Financeiros </h5>

            <div class="col-3">
                <label class="form-label">Pago?</label>

                <select class="form-select " name="pago">
                    <option value="Sim"> Sim </option>
                    <option value="Não"> Não </option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Devendo:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="devendo" name="devendo">
                </div>
            </div>

            <div class="col-md-3">
                <label class="form-label">Desconto:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="form-control" id="desconto" name="desconto">
                </div>
            </div>
            
            <div class="col-md-3">
                <label class="form-label">Total:</label>
                <div class="input-group col-3">
                    <span class="input-group-text" id="basic-addon1">R$:</span>
                    <input type="text" class="moeda form-control valTotalServicoEMaterial" readonly id="valTotalServicoEMaterial" name="valTotalServicoEMaterial">
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

<script src="{{asset('js/functionsCreate.js') }}"> </script>

@endsection