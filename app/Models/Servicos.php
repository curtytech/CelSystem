<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;
    // protected $fillable = ['isbn', 'nome', 'autor', 'preco'];
    // fillable = Campos preenchiveis pelo usuario

    protected $casts = [ 
        'servico' => 'array',
        'descServico' => 'array',
        'qtdServico' => 'array',
        'valServico' => 'array',
        'valTotalServico' => 'array',
        'material' => 'array',
        'qtdMaterial' => 'array',
        'valMaterial' => 'array',
        'valTotalMaterial' => 'array'
       
    ];
    protected $fillable = [
        'nomeCliente',
        'telefoneCliente',
        'dataPedido',
        'dataEntrega',
        'servico',
        'qtdServico',
        'descServico',
        'valServico',
        'valTotalServico',
        'valTotalServicos',
        'material',
        'qtdMaterial',
        'valMaterial',
        'valTotalMaterial',
        'valTotalMateriais',
        'sinal',
        'restante',
        'frete',
        'valTotalServicoEMaterial'
        
    ];

}
