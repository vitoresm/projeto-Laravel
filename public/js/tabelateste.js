
$(document).ready(function() {
    $('#tabelaFormatada').dataTable({
        "language" : {
             "decimal": ",",
             "thousands": ",",
             "sEmptyTable": "Nenhum registro encontrado",
             "sInfo": "Mostrando  _START_ até _END_ de _TOTAL_ Resultados",
             "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
             "sInfoFiltered": "(Filtrados de MAX registros)",
             "sInfoPostFix": "",
             "sInfoThousands": ".",
             "sLengthMenu": "_MENU_ resultados por página",
             "sLoadingRecords": "Carregando...",
             "sProcessing": "Processando...",
             "sZeroRecords": "Nenhum registro encontrado",
             "sSearch": "Pesquisar",
             "oPaginate": {
                 "sNext": "Próximo",
                 "sPrevious": "Anterior",
                 "sFirst": "Primeiro",
                 "sLast": "Último"
             },
             "oAria": {
                 "sSortAscending": ": Ordenar colunas de forma ascendente",
                 "sSortDescending": ": Ordenar colunas de forma descendente"
             }
         },
         "columnDefs": [{
            "render": function(data){
               return parseFloat(data).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
            },
            "targets": [3]
         }]
        
       
     });  
} );

$(document).ready( function () {
   
    $('#datatable').DataTable({
        "responsive": true,
        "bJQueryUI": true,
        "scrollX": true,
        "language": {
            "decimal": ",",
            "thousands": ".",
            "sProcessing":   "Processando...",
            "sLengthMenu":   "Mostrar _MENU_ registros",
            "sZeroRecords":  "Não foram encontrados resultados",
            "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix":  "",
            "sSearch":       "Buscar:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Primeiro",
                "sPrevious": "Anterior",
                "sNext":     "Seguinte",
                "sLast":     "Último",
                
               
            }
        },
              
    });

  });