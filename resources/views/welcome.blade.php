@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<div class="container mt-4 ">
    <h1 class="mb-3 font">Dashboard</h1>
</div>



<div class="container">
    <div class="row">
        <div class="form-group col-md-3">
            <a class=" btn btn-outline-dark btn-block editrow" href="/servicos/show"><i class="mx-5 my-2 fas fa-tools fa-5x"></i>
            <br>
                <h5>Serviços</h5>
            </a>
        </div>

        <div class="form-group col-md-3">
            <a class=" btn btn-outline-dark btn-block editrow" href="/servicos/show"><i class="mx-5 my-2 fas fa-store-alt fa-5x"></i>
            <br>
                <h5>Compras</h5>
            </a>
        </div>

        <div class="form-group col-md-3">
            <a class=" btn btn-outline-dark btn-block editrow" href="/servicos/show"><i class="mx-5 my-2 fas fa-shopping-bag fa-5x"></i>
            <br>
                <h5>Produtos</h5>
            </a>
        </div>
        <div class="form-group col-md-3">
            <a class=" btn btn-outline-dark btn-block editrow" href="/servicos/show"><i class="mx-5 my-2 fas fa-money-bill-wave fa-5x"></i>
            <br>
                <h5>Vendas</h5>
            </a>
        </div>

    </div>
</div>

</div>


</section>

</div>


@endsection