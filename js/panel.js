$(document).ready(function(){
    $("#accion1").hide("slow");
    var accion1 = true;
    $("#accion2").hide("slow");
    var accion2 = true;
    $("#accion3").hide("slow");
    var accion3 = true;
    $("#evento1").click(function(){
        if(accion1){
            $("#accion1").show(1000);
            accion1 = false
        }else{
            $("#accion1").hide("slow");
            accion1 = true;
        }
    });

    $("#evento2").click(function(){
        if(accion2){
            $("#accion2").show(1000);
            accion2 = false
        }else{
            $("#accion2").hide("slow");
            accion2 = true;
        }
    });

    $("#evento3").click(function(){
        if(accion3){
            $("#accion3").show(1000);
            accion3 = false
        }else{
            $("#accion3").hide("slow");
            accion3 = true;
        }
    });
});