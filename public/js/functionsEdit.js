//Minhas funções

$(".container").mousemove(function () {
    var total = 0;
    $('.valTotalServico').each(function () {
        var valor = Number($(this).val());
        if (!isNaN(valor)) total += valor;
    });
    total = total;
    $("#valTotalServicos").val(total.toFixed(2));
});

//Soma Totais do Material
$(".container").mousemove(function () {
    var total = 0;
    $('.valTotalMaterial').each(function () {
        var valor = Number($(this).val());
        if (!isNaN(valor)) total += valor;
    });
    total = total;
    $("#valTotalMateriais").val(total.toFixed(2));
});

//Soma Totais do Material e Serviço com Frete
$(".container").mousemove(function () {
    var total = 0;
    $('#valTotalServicos').each(function () {
        var valor = Number($(this).val());
        if (!isNaN(valor)) total += valor;
    });
    $('#valTotalMateriais').each(function () {
        var valor = Number($(this).val());
        if (!isNaN(valor)) total += valor;
    });
    $('#frete').each(function () {
        var valor = Number($(this).val());
        if (!isNaN(valor)) total += valor;
    });
    total = total;
    $("#valTotalServicoEMaterial").val(total.toFixed(2));
});

//Variavel Counter Servico
var counterServico = 1;

// Remover Serviço
removeServico = function (handler) {
    var tr = $(handler).closest('tr');
    tr.fadeOut(400, function () {
        tr.remove();
    });
    counterServico--;

    return false;
};

// Add Serviço
addServico = function () {

    if (counterServico > 10) {
        alert("Você atingiu o limite de serviços!");
        return false;
    }

    var newRow = $("<tr>");
    var cols = "";

    cols += '<div class="row mt-3"> <div class="col-md-2">  <label> Serviço ' + counterServico + ': </label> ' +
        ' <input class="form-control" type="text" name="servico[]" id="servico" /> </div> ';
    cols += '<div class="col-md-3">  <label> Descrição do Serviço ' + counterServico + ' </label> ' +
        ' <input class="form-control" type="text" name="descServico[]" id="descServico" /> </div> ';

    cols += '<div class="col-md-2 ">  <label> Quantidade do Serviço: ' + counterServico + ' </label> ' +
        ' <input class="form-control qtdServico" id="qtdServico" name="qtdServico[]"  /> </div> ';

    cols += '<div class="col-md-2 ">  <label> Valor do Serviço: ' + counterServico + ' </label> ' +
        ' <input class="form-control valServico " type="text" name="valServico[]" id="valServico" /></div> ';

    cols += '<div class="col-md-2">  <label> Total do Serviço: ' + counterServico + ' </label> ' +
        ' <div class="input-group col-3"> <span class="input-group-text" id="basic-addon1">R$:</span> ' +
        ' <input class="form-control valTotalServico" readonly type="text" name="valTotalServico[]" id="valTotalServico" /> </div>  </div>';

    cols += ' <div class="col-md-1 ">  <button onclick="removeServico(this)"  class="mt-2 btn btn-danger btn-sm" type="button"> Excluir Serviço </button>  </div>';

    cols += '</div>';

    newRow.append(cols);
    $("#dadosDoServico").append(newRow);

    counterServico++;

    $(".valServico, .qtdServico").unbind('blur keyup');
    $(".valServico, .qtdServico").on("blur keyup", function () {
        const tr = $(this).parent().parent();

        const val = parseFloat(tr.find('.valServico').val());
        const qtd = parseFloat(tr.find('.qtdServico').val());


        if (!isNaN(qtd) && !isNaN(val)) {
            tr.find('.valTotalServico').val((qtd * val));

        }
    });

    // $('#valTotalServico').val(valTotalServico);
    return false;

};

//Variavel Counter Material
var counterMaterial = 1;

// Remover Material
removeMaterial = function (handler) {
    var tr = $(handler).closest('tr');
    tr.fadeOut(400, function () {
        tr.remove();
    });
    counterMaterial--;

    return false;
};

// Add Material
addMaterial = function () {

    if (counterMaterial > 10) {
        alert("Você atingiu o limite de serviços!");
        return false;
    }

    var newRow = $("<tr>");
    var cols = "";

    cols += '<div class="row mt-3"> <div class="col-md-5">  <label> Material ' + counterMaterial + ': </label> ' +
        ' <input class="form-control" type="text" name="material[]" id="material" /> </div> ';

    cols += '<div class="col-md-2 ">  <label> Quantidade do Material: ' + counterMaterial + ' </label> ' +
        ' <input class="form-control qtdMaterial" id="qtdMaterial" name="qtdMaterial[]"  /> </div> ';

    cols += '<div class="col-md-2 ">  <label> Valor do Material: ' + counterMaterial + ' </label> ' +
        ' <input class="form-control valMaterial " type="text" name="valMaterial[]" id="valMaterial" /></div> ';

    cols += '<div class="col-md-2">  <label> Total do Material: ' + counterMaterial + ' </label> ' +
        ' <div class="input-group col-3"> <span class="input-group-text" id="basic-addon1">R$:</span> ' +
        ' <input class="form-control valTotalMaterial" readonly type="text" name="valTotalMaterial[]" id="valTotalMaterial" /> </div>  </div>';

    cols += ' <div class="col-md-1 ">  <button onclick="removeMaterial(this)"  class="mt-2 btn btn-danger btn-sm" type="button"> Excluir Material </button>  </div>';

    cols += '</div>';

    newRow.append(cols);
    $("#dadosDoMaterial").append(newRow);

    counterMaterial++;

    $(".valMaterial, .qtdMaterial").unbind('blur keyup');
    $(".valMaterial, .qtdMaterial").on("blur keyup", function () {
        const tr = $(this).parent().parent();

        const val = parseFloat(tr.find('.valMaterial').val());
        const qtd = parseFloat(tr.find('.qtdMaterial').val());


        if (!isNaN(qtd) && !isNaN(val)) {
            tr.find('#valTotalMaterial').val((qtd * val));

        }
    });

    return false;

};