/**
 *
 * Funcion Para Crear Controles HTML
 *
 */
var i=0;
$(document).ready(function(){

    $("#btn3").click(function(e){
      e.preventDefault();
  i++;
  $("#contenido1").append('<label>pregunta</label><input type="text" id="name'+i+'" name="name'+i+'" class="form-control">&nbsp;<select id="dofa" class="dofa select"><option value="ninguna">Elija opciones</option><option id="uno">1</option><option id="dos">2</option><option id="tres">3</option><option id="cuatro">4</option><option id="cinco">5</option><option id="seis">6</option><option id="siete">7</option><br></select><br>');
     
          
    $("#cant").val(); 
      
    });
     
});

var i=0;
$(document).ready(function(){
    $("#btn1").click(function() {
        i++;

        $("#pregumul").show();
       	$("#cant").val(); 

    });
 
});




var i=0;
$(document).ready(function(){

    $("#btn4").click(function(e){
      e.preventDefault();
  i++;
     $("#contenido2").append('<label>pregunta</label><input type="text" id="name'+i+'" name="name'+i+'" class="form-control"><br>');
        
   

    });
});

var i=0;
$(document).ready(function(){
    $("#btn2").click(function() {
        i++;
      
        $("#preguntabi").show();
        $("#cant").val(i); 
        });
});

//seleccion de campos

$(document).ready(function (){
    $(".dofa").keyup(function () {
        var value = $("#dofa option:selected").text();               
        $("#type").val(value);        
        if($(".dofa").val()!="")
        {
          $("#contenido").empty();

          for(i=0;i<value;i++)
          {
            $("#contenido").append('<input type="text" name="text'+i+'"><select class="form-control" name="DOFA"><option value="ninguna">ninguna</option><option value="debilidad">debilidad</option><option value="oportunidad">oportunidad</option><option value="fortaleza">fortaleza</option><option value="amenaza">amenaza</option><br></select><br><br>');    
          }     
        }  

    });

    $(".dofa").click(function() {
        var value = $("#dofa option:selected").text();               
        $("#type").val(value);        
        if($(".dofa").val()!="")
        {
          $("#contenido").empty();

          for(i=0;i<value;i++)
          {
            $("#contenido").append('<input type="text" name="text'+i+'"><select class="form-control" name="DOFA"><option value="ninguna">ninguna</option><option value="debilidad">debilidad</option><option value="oportunidad">oportunidad</option><option value="fortaleza">fortaleza</option><option value="amenaza">amenaza</option><br></select><br><br>');    
          }     
        }  

    });
});
//funcion de enviar
$(document).ready(function(){

  $('#Cuestionario').submit(function(e){
    e.preventDefault();
  });

  $('.btn btn-succes').click(function(){
   
    var TDescripcion = $('.tipo').val();
    var Texto = $('#pregunta').val();

    var FK_Pregunta = new Array();
    var tokenP = $('#tokenP').val();
      for (var i = 1; i <= Cantidad; i++) {
        //alert($('#FK_Pregunta'+i).val());

        FK_Pregunta[i]=$('#FK_Pregunta'+i).val();

      }
  $.ajax({
    type: "post",
    url: "/Cuestionario/store",
    headers: {'X-CSRF-TOKEN': tokenP},
    data:{TDescripcion,Texto,FK_Pregunta},
    success: function(resp){
    if(resp!=""){
      alert("Cuestionario Guardado Correctamente");
      window.location.href="CUESTIONARIO/Cuestionario";
       }
    },
    error: function(data) {
      alert("Error No se ha Guardado el Cuestionario!!");
      }
  });
});
  });

//
/**
 * Fin Funcion Crear Controles HTML
 */