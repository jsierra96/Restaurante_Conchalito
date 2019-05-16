$(document).ready(function(){

    window.operateEvents = {
        'click .like': function (e, value, row, index) {
          //alert('You click like action, row: ' + JSON.stringify(row))
          alert(value);
        },
        'click .remove': function (e, value, row, index) {
          $table.bootstrapTable('remove', {
            field: 'id',
            values: [row.id]
          })
        }
      }

    $('#table').bootstrapTable({
        url: '../controllers/ObtPro.php',
        pagination: true,
        search: true,
        columns: [{
          field: 'nombre',
          title: 'Nombre'
        }, {
          field: 'tipo',
          title: 'Tipo'
        }, {
          field: 'size',
          title: 'Tamaño'
        },{
            field: 'precio',
            title: 'Precio'
        },{
            field: 'img',
            align: 'center',
            title: 'Imagen',
            formatter : function(value, row, index){
                return '<img src="'+value+'" style="width:100px;height:auto;border:double 3px #29A3F4;border-radius:5px;">';
            }
        },{
            field: 'clave',
            align: 'center',
            valign: 'middle',
            title: 'Editar',
            events: window.operateEvents,
            formatter : function(value, row, index){
                return '<button class="btn btn-primary icon-pencil-6 like"></button><br><br><button class="btn btn-danger icon-trash remove"></button>';
            }
        }]
      });
});
  