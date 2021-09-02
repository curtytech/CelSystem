<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;


class ComprasController extends Controller
{
    
    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $compra = new Compras;

        $compra->dataCompra = $request->dataCompra;
        $compra->comprovanteCompra = $request->comprovanteCompra;
        $compra->fornecedorCompra = $request->fornecedorCompra;
        $compra->idProduto = $request->idProduto;

        // $user = auth()->user();
        // $compra->user_id = $user->id;

        $compra->save();

        return redirect('/compras/show')->with('msg', 'compra salva com sucesso');
    }

    public function show()
    {
        $compras = Compras::all();
        return view('compras.show', ['compras' => $compras]);
    }

    public function destroy($id)
    {
        $compras = Compras::findOrFail($id);
        $compras->delete();
        return redirect('/compras/show')->with('msg', 'compra excluida com sucesso');
    }

    public function see($id)
    {
        $compras = Compras::findOrFail($id);
        return view('compras.see', ['compras' => $compras]);
    }

    public function edit($id)
    {
        $compras = Compras::findOrFail($id);
        return view('compras.edit', ['compras' => $compras]);
    }

    public function update(Request $request, $id)
    {
        $compras = Compras::findOrFail($id);
        $compras->update([
            'dataCompra' => $request->dataCompra,
            'comprovanteCompra' => $request->comprovanteCompra,
            'fornecedorCompra' => $request->fornecedorCompra,
            'idProduto' => $request->idProduto,
            
        ]);
        return redirect('/compras/show')->with('msg', 'compra atualizada com sucesso');
    }

}
