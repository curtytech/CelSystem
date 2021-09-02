<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function show()
    {
        $produtos = Produtos::all();
        return view('produtos.show', ['produtos' => $produtos]);
    }


}
