
function newDoc(archivo) {
    window.location.assign(archivo);
}
function CargarAjax_Form(arch, form, tipo){
      $.ajax({
        type: tipo,
        url: arch,
        data : $('#'+form+"").serialize(),
        success: function(msg){
         console.log(msg);
        //alert(msg);
        //$('#contenedor_win').html(msg);
        //$("#contenedor_win").addClass('zoomIn animated ');
        // $("#sesiones").append('<div><p>'+msg+'</div>');
        // $( ".remodal-bg" ).removeClass('remodal-is-closed');
        // $( ".remodal-bg" ).addClass('remodal-is-openning');
    }
  });
}
function CargarAjax_Win(arch,vares,tipo){
	$('#contenedor_win').html('');
	$.ajax({
        type: tipo,
        url: arch,
        data: vares,
        success: function(msg){
        $('#contenedor_win').html(msg);
        console.log('iniciar modal');
        $("#modal").addClass('bounceInRight animated');
        }
      });
}

function CargarAjax(contenedor,arch, vares, tipo){
      $('#'+contenedor+'').html('');
      $.ajax({
        type: tipo,
        url: arch,
        data: vares,
        success: function(msg){
        $('#'+contenedor+'').html(msg);
        console.log('iniciar modal');
        }
      });
    }
function CAjax(arch, vares, tipo){
      $.ajax({
        type: tipo,
        url: arch,
        data: vares,
        success: function(msg){
        console.log('Success CAjax'+msg);
        }
      });
    }
function QRAjax(arch, vares, tipo,contenedor){
  $.ajax({
    type: tipo,
    url: arch,
    data: vares,
    success: function(msg){
    $("#"+contenedor+"").append(msg);
    }
  });
}
function VotoAjax(arch, vares, tipo){
  $.ajax({
    type: tipo,
    url: arch,
    data: vares,
    success: function(msg){
        $('body').append(msg);
    alert('Success '+msg);
    location.reload();
    console.log('Success '+msg);
    }
  });
}

function optionAjax(arch, vares, tipo,contenedor){
  $.ajax({
    type: tipo,
    url: arch,
    data: vares,
    success: function(msg){
//$("#"+contenedor+"").text(msg);
         $("#"+contenedor+"").attr("value",msg);
//          $("#"+contenedor+"").val(msg);
    }
  });
}





