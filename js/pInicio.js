$(document).ready(function(){
    window.operateEvents = {
        'click .like': function (e, value, row, index) {
          $("#oPe").text('Modificar producto');
          $("#subir").css("display","block");
          $("#sOpe").val('a');
          $("#pClave").val(row['clave']).prop('disabled', true);
          $("#pClave2").val(row['clave']);
          $("#producto").val(row['nombre']).prop('disabled', false);
          $("#pSize").val(row['size']).prop('disabled', false);
          $("#pType").val(row['tipo']).prop('disabled', false);
          $("#pBuy").val(row['precio']).prop('disabled', false);
          $("#pImg").attr("src",row['img']).prop('disabled', false);
          $("#dialog").dialog({
            buttons: {
              'Guardar': function() {
                var formData = new FormData($("#guardar")[0]);
                $.ajax({
                  url: '../controllers/admonProductos.php',
                  type : 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(datos){
                    if(datos.success){
                      if(datos.success){
                        $('#table').bootstrapTable('refresh');
                        $("#dialog").dialog("close");
                      }else{
                        $("#error").css("display",'block');
                      }
                    }
                  }
                });
              },
              'Cancelar': function() {
                $(this).dialog("close");
              },
            }
          });
          $("#dialog").dialog('open');
        },
        'click .remove': function (e, value, row, index) {
          $("#oPe").text('Borrar producto');
          $("#subir").css("display","none");
          $("#sOpe").val('a');
          $("#pClave").val(row['clave']).prop('disabled', true);
          $("#producto").val(row['nombre']).prop('disabled', true);
          $("#pSize").val(row['size']).prop('disabled', true);
          $("#pType").val(row['tipo']).prop('disabled', true);
          $("#pBuy").val(row['precio']).prop('disabled', true);
          $("#pImg").attr("src",row['img']).prop('disabled', true);
          $("#dialog").dialog({
            buttons: {
              'Eliminar': function() {
                var id = $("#pClave").val();
                var ope = 'b'; 
                $.ajax({
                  url: '../controllers/admonProductos.php',
                  data: {
                    id: id,
                    opera: ope
                  },
                  type : 'POST',
                  dataType : 'json',
                  success: function(datos){
                    if(datos.success){
                      $('#table').bootstrapTable('refresh');
                      $("#dialog").dialog("close");
                    }else{
                      $("#error").css("display",'block');
                    }
                  }
                });
              },
              'Cancelar': function() {
                $(this).dialog("close");
              },
            }
          });
          $("#dialog").dialog('open');
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
      $("#dialog").dialog({
        autoOpen: false,
        width:600,
        modal: true
        });
      
      $("#agregar").click(function(){
        $("#oPe").text('Agregar producto');
        $("#sOpe").val('c');
        $("#dialog").dialog('open');
        $("#dialog").dialog({
          buttons: {
            'Agregar': function() {
              var formData = new FormData($("#guardar")[0]);
              $.ajax({
                url: '../controllers/admonProductos.php',
                type : 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos){
                  if(datos.success){
                    if(datos.success){
                      $('#table').bootstrapTable('refresh');
                      $("#dialog").dialog("close");
                    }else{
                      $("#error").css("display",'block');
                    }
                  }
                }
              });
            },
            'Cancelar': function() {
              $(this).dialog("close");
            },
          }
        });
      });

        $('#img').change(function(e) {
          $('#imagen').val('si');
          addImage(e);
        });

        function addImage(e){
          var file = e.target.files[0],
          imageType = /image.*/;
          var reader = new FileReader();
          reader.onload = fileOnload;
          reader.readAsDataURL(file);
        }

        function fileOnload(e) {
          var result=e.target.result;
            $('#pImg').attr("src",result);
        }
});
