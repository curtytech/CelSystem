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

        $compra->qtdMaterial = $request->qtdMaterial;
        $compra->valMaterial = $request->valMaterial;
        $compra->valTotalMaterial = $request->valTotalMaterial;
        $compra->valTotalMateriais = $request->valTotalMateriais;
     

        // $user = auth()->user();
        // $compra->user_id = $user->id;

        $compra->save();

        return redirect('/compras/show')->with('msg', 'Serviço salvo com sucesso');
    }

    public function show()
    {
        $compras = compras::all();
        return view('compras.show', ['compras' => $compras]);
    }

    public function destroy($id)
    {
        $compras = compras::findOrFail($id);
        $compras->delete();
        return redirect('/compras/show')->with('msg', 'Serviço excluido com sucesso');
    }

    public function see($id)
    {
        $compras = compras::findOrFail($id);
        return view('compras.see', ['compras' => $compras]);
    }

    public function edit($id)
    {
        $compras = compras::findOrFail($id);
        return view('compras.edit', ['compras' => $compras]);
    }

    public function update(Request $request, $id)
    {
        $compras = Compras::findOrFail($id);
        $compras->update([
            'nomeCliente' => $request->nomeCliente,
            'telefoneCliente' => $request->telefoneCliente,
            'dataPedido' => $request->dataPedido,
            'dataEntrega' => $request->dataEntrega,
            'compra' => $request->compra,
            'descServico' => $request->descServico,
            'qtdServico' => $request->qtdServico,
            'valServico' => $request->valServico,
            'valTotalServico' => $request->valTotalServico,
            'valTotalcompras' => $request->valTotalcompras,
            'material' => $request->material,
            'qtdMaterial' => $request->qtdMaterial,
            'valMaterial' => $request->valMaterial,
            'valTotalMaterial' => $request->valTotalMaterial,
            'valTotalMateriais' => $request->valTotalMateriais,
            'sinal' => $request->sinal,
            'restante' => $request->restante,
            'frete' => $request->frete,
            'valTotalServicoEMaterial' => $request->valTotalServicoEMaterial,
        ]);
        return redirect('/compras/show')->with('msg', 'Serviço atualizado com sucesso');
    }

}
