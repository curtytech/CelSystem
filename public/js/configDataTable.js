
$(document).ready(function () {
  $('#dataTable').DataTable({
    "language": {
      "lengthMenu": "Exibindo _MENU_ registros por página",
      "zeroRecords": "Nada encontrado",
      "info": "Exibindo página _PAGE_ de _PAGES_",
      "infoEmpty": "Nenhum registro disponível",
      "infoFiltered": "(filtrado de _MAX_ registros no total)",
      "sSearch": "Pesquisar:",
      paginate: {
        first: "Primeiro",
        previous: "Anterior",
        next: "Próximo",
        last: "Ultimo"
      }
    }

  });
});
