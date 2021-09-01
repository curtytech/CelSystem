<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicos;


class ServicosController extends Controller
{
    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        $servico = new Servicos;

        $servico->nomeCliente = $request->nomeCliente;
        $servico->telefoneCliente = $request->telefoneCliente;
        $servico->dataPedido = $request->dataPedido;
        $servico->dataEntrega = $request->dataEntrega;
        $servico->servico = $request->servico;
        $servico->descServico = $request->descServico;
        $servico->qtdServico = $request->qtdServico;
        $servico->valServico = $request->valServico;
        $servico->valTotalServico = $request->valTotalServico;
        $servico->valTotalServicos = $request->valTotalServicos;
        $servico->material = $request->material;
        $servico->qtdMaterial = $request->qtdMaterial;
        $servico->valMaterial = $request->valMaterial;
        $servico->valTotalMaterial = $request->valTotalMaterial;
        $servico->valTotalMateriais = $request->valTotalMateriais;
        $servico->sinal = $request->sinal;
        $servico->restante = $request->restante;
        $servico->frete = $request->frete;
        $servico->valTotalServicoEMaterial = $request->valTotalServicoEMaterial;

        // $user = auth()->user();
        // $servico->user_id = $user->id;

        $servico->save();

        return redirect('/servicos/show')->with('msg', 'Serviço salvo com sucesso');
    }

    public function show()
    {
        $servicos = Servicos::all();
        return view('servicos.show', ['servicos' => $servicos]);
    }

    public function destroy($id)
    {
        $servicos = Servicos::findOrFail($id);
        $servicos->delete();
        return redirect('/servicos/show')->with('msg', 'Serviço excluido com sucesso');
    }

    public function see($id)
    {
        $servicos = Servicos::findOrFail($id);
        return view('servicos.see', ['servicos' => $servicos]);
    }

    public function edit($id)
    {
        $servicos = Servicos::findOrFail($id);
        return view('servicos.edit', ['servicos' => $servicos]);
    }

    public function update(Request $request, $id)
    {
        $servicos = Servicos::findOrFail($id);
        $servicos->update([
            'nomeCliente' => $request->nomeCliente,
            'telefoneCliente' => $request->telefoneCliente,
            'dataPedido' => $request->dataPedido,
            'dataEntrega' => $request->dataEntrega,
            'servico' => $request->servico,
            'descServico' => $request->descServico,
            'qtdServico' => $request->qtdServico,
            'valServico' => $request->valServico,
            'valTotalServico' => $request->valTotalServico,
            'valTotalServicos' => $request->valTotalServicos,
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
        return redirect('/servicos/show')->with('msg', 'Serviço atualizado com sucesso');
    }
}
