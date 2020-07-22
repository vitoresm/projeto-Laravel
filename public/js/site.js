function pergunta(){ 
  // retorna true se confirmado, ou false se cancelado
  return confirm('Tem certeza que deseja excluir esse item?');
}


// data table
 $(document).ready( function () {
  $('#tableProduto').DataTable({
    
    responsive:true,
    data: '',
    columnDefs: [ 
                { "width": "7%", "targets": 3 }, //defini manualmente o tamanho da coluna
                {"render": function(data){       //responsavel por 'renderizar' a coluna que vc deseja aplicando o filtro R$
        return parseFloat(data).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        },"targets": 3
      }
      ],    
      columns: [
               { title: "ID" },
               { title: "Nome" },
               { title: "Descrição" },
               { title: "Valor" },
               { title: "Ação" }            
               ] 
  });


    $('#datatable ').DataTable({
       
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

String.prototype.reverse = function(){
    return this.split('').reverse().join(''); 
  };
  
  function mascaraMoeda(campo,evento){
    var tecla = (!evento) ? window.event.keyCode : evento.which;
    var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
    var resultado  = "";
    var mascara = "##.###.###,##".reverse();
    for (var x=0, y=0; x<mascara.length && y<valor.length;) {
      if (mascara.charAt(x) != '#') {
        resultado += mascara.charAt(x);
        x++;
      } else {
        resultado += valor.charAt(y);
        y++;
        x++;
      }
    }
    campo.value = resultado.reverse();
  }

 