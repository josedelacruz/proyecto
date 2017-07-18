<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Granja</a> </div>
  <h1>Mantenimientos</h1>
  <div class="container-fluid"  >
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a onclick="CargarAjax('contenido','mantenimiento.php', '', 'GET');"  href="#"> <i class="icon-globe"></i> <span class="label label-important"></span> Granja </a> </li>
            <li class="bg_lg"> <a onclick="CargarAjax('contenido','mantenimiento lote.php', '', 'GET');"  href="#"> <i class="icon-th-list"></i>Lote</a> </li>
            <li class="bg_lo"> <a onclick="CargarAjax('contenido','mantenimiento nave.php', '', 'GET');"  href="#"> <i class="icon-th-list"></i> nave</a> </li>
            <li class="bg_ly"> <a onclick="CargarAjax('contenido','mantenimiento postura.php', '', 'GET');" href="#"> <i class="icon-th-list"></i>Postura</a> </li>
            <li class="bg_ls"> <a onclick="CargarAjax('contenido','mantenimiento salida.php', '', 'GET');" href="#"> <i class="icon-filter"></i>Salida</a> </li>
            <li class="bg_lr"> <a onclick="CargarAjax('contenido','mantenimiento alimento.php', '', 'GET');" href="#"> <i class="icon-th-list"></i>Alimento</a> </li>
            <li class="bg_lom"> <a onclick="CargarAjax('contenido','mantenimiento compra.php', '', 'GET');" href="#"> <i class="icon-money"></i>Compra</a> </li>
            <li class="bg_ll"> <a onclick="CargarAjax('contenido','mantenimiento incubadora.php', '', 'GET');" href="#"> <i class="icon-th-list"></i>Incubadora</a> </li>
            <li class="bg_le"> <a onclick="CargarAjax('contenido','mantenimiento nacimiento.php', '', 'GET');" href="#"> <i class="icon-th-list"></i>Nacimiento</a> </li>
             <li class="bg_lp"> <a onclick="CargarAjax('contenido','mantenimiento alimento consumido.php', '', 'GET');" href="#"> <i class="icon-th-list"></i>Alimento Consumido</a> </li>
          
          
          
          </ul>
          
          </ul>
          
          </ul>
          
          </ul>
        </div>
</div>
<div class="container-fluid">
<div id="gritter-notice-wrapper" style="display: none;"><div id="gritter-item-1" class="gritter-item-wrapper" style=""><div class="gritter-top"></div><div class="gritter-item"><div class="gritter-close" style="display: none;"></div><img src="img/demo/envelope.png" class="gritter-image"><div class="gritter-with-image"><span class="gritter-title">Guardado!</span><p></p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div></div>
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title" style="background: #27a9e3;"> <span class="icon"> <i class="icon-globe" style="color:white"></i> </span>
          <h5 style="color: white">Granja </h5> 
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal" id="form_granja">
            <div class="control-group">
              <label class="control-label">Nombre:</label>
              <div class="controls">
                <input name="nombre" type="text" class="span6" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Direccion:</label>
              <div class="controls">
                <input name="direccion" type="text" class="span6" />
              </div>
            </div>
           
            <div class="form-actions"> 
              <a href="#" class="btn btn-success" onclick="CargarAjax_Form('reg_granja.php','form_granja','GET');limpiar()">Guardar </a>
            </div>
         <form >
      </div>
    </div>
  </div>
</div>

<script>
  function limpiar() {
   $(".span6").text("");
    $(".span6").val(""); 
    console.log("limpiar");
    $("#gritter-notice-wrapper").show(); 
  }
</script>
