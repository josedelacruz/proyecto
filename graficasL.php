
<?php  

include("conectar.php");
$con = conectar();
// foreach($con->query("SELECT * FROM granjas")as $row) {
$fecha_i='2017-03-28 00:00:00'; $fecha_f='2017-03-28 23:59:59';
// }

$query= "SELECT granja.nombre, SUM(postura.huevos_f), SUM(postura.huevos_s),SUM(postura.huevos_r),SUM(postura.huevos_d) FROM postura, nave, lote, granja where postura.id_nave = nave.id_nave and nave.id_lote = lote.id_lote and lote.id_granja = granja.id_granja and postura.fecha_reg BETWEEN '2017-03-25 00:00:00'and '2017-03-28 23:59:59' order by granja.id_granja";

 foreach($con->query($query)as $row) {
  $hf = $row['SUM(postura.huevos_f)'];
  $hs = $row['SUM(postura.huevos_s)'];
  $hr = $row['SUM(postura.huevos_r)'];
  $hd = $row['SUM(postura.huevos_d)'];
  // fin grafica postura de huevos
}
  $query2= "SELECT SUM(ac.cantidad_h) , SUM(ac.cantidad_m) FROM alimento_consumido ac, nave n where ac.id_nave = n.id_nave";

 foreach($con->query($query2)as $row) {
  $ch = $row['SUM(ac.cantidad_h)'];
  $cm = $row['SUM(ac.cantidad_m)'];
 
  // fin grafica postura de huevos
}
 $query3= "SELECT sum(huevos_encu), SUM(huevos_recha) from incubadora";

 foreach($con->query($query3)as $row) {
  $he = $row['sum(huevos_encu)'];
  $hr = $row['SUM(huevos_recha)'];
 }
  // fin grafica huevos encubados y rechasados

 $query4= "SELECT sum(salida.cantidad_h) as hh, sum(salida.cantidad_m) as mm from salida, nave, lote where salida.motivo = 1";

 foreach($con->query($query4)as $row) {
  $hm = $row['hh'];
  $mm = $row['mm'];
 }
 //cantidad hembras y machos muertos

 $query5= "SELECT sum(salida.cantidad_h) as h, sum(salida.cantidad_m) as m from salida, nave, lote where salida.motivo = 2";

 foreach($con->query($query5)as $row) {
  $vh = $row['h'];
  $vm = $row['m'];
 }
 //cantidad hembras y machos vendidos

  $query6= "SELECT sum(compra.cantidad_h) as ch, sum(compra.cantidad_m) as cm from compra";

 foreach($con->query($query6)as $row) {
  $ch = $row['ch'];
  $cm = $row['cm'];
 }
 //cantidad hembras y machos comprados

  $query7= "SELECT sum(alimento_consumido.cantidad_h) as ah, sum(alimento_consumido.cantidad_m) as am from alimento_consumido";

 foreach($con->query($query7)as $row) {
  $ah = $row['ah'];
  $am = $row['am'];
 }
 //cantidad hembras y machos comprados
 
 
 
 

?>
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" class="tip-bottom" data-original-title="Ir al inicio"><i class="icon-home"></i> Inicio</a></div>
  </div>

  <div class="control-group">
              <label class="control-label">Desde </label>
              <div class="controls">
                <div class="input-append date datepicker">
                  <input type="date" data-date-format="dd-mm-aaaa" class="span" >
              </div>
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Hasta </label>
              <div class="controls">
                <div class="input-append date datepicker">
                  <input type="date" data-date-format="dd-mm-aaaa" class="span" >
                 </div>
              </div>
            </div>

                  <!--buscar-->   
                   <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>


    <!--Chart-box-->    
      <div class="row-fluid">
        <div class="widget-box" >
          <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Graficas importantes</h5>
          </div>
            
          <div class="widget-content">

      <div id="container" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      <div id="alimentoconsumido" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      <div id="huevosencubadosyrechasados" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      <div id="MOrtalidad" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      <div id="Venta" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      <div id="compra" style="min-width: 210px; height: 400px; max-width: 500px; margin: 0 auto"></div>
      

 <!--llamar y diseñar las graficas--> 
              
              
          </div>
        </div>
        <div id="footer" class="span12"><a href="http://themedesigner.in"></a> </div>
      </div><!--End-Chart-box--> 
  



    </div>



<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Postura de Huevos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Cantidad',
        colorByPoint: true,
        data: [{
            name: 'Huevos Fertiles',
            y: <?php echo $hf; ?>
        }, {
            name: 'Huevo sucios',
            y:  <?php echo $hs; ?>,
            sliced: true,
            selected: true
        }, {
            name: 'Huevos Rotos',
            y:  <?php echo $hr; ?>
        }, {
            name: 'Huevos Doble Yema',
            y:  <?php echo $hd; ?>
        }
        // , {
        //     name: 'Opera',
        //     y:  <?php echo $hf; ?>
        // }, {
        //     name: 'Proprietary or Undetectable',
        //     y:  <?php echo $hf; ?>
        // }
        ]
    }]
});
    </script>

<!--alimento consumido--> 
<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('alimentoconsumido', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'alimento consumido'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Hembras ',
            y: <?php echo $ch; ?>
        }, {
            name: 'Machos',
            y:  <?php echo $cm; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>


  </script>

<!--encubadora--> 
<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('huevosencubadosyrechasados', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Huevos en incubadora'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Huevos Encubados ',
            y: <?php echo $he; ?>
        }, {
            name: 'Huevos Rechasados',
            y:  <?php echo $hr; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>
    <!--mortalidad--> 

<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('MOrtalidad', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Mortalidad'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Hembras ',
            y: <?php echo $hm; ?>
        }, {
            name: 'Machos ',
            y:  <?php echo $mm; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>
<!--venta--> 

<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('Venta', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Venta de Aves'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Hembras ',
            y: <?php echo $vh; ?>
        }, {
            name: 'Machos ',
            y:  <?php echo $vm; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>

<!--compra--> 

<script src="hc/code/highcharts.js"></script>
<script src="hc/code/modules/exporting.js"></script>




    <script type="text/javascript">

Highcharts.chart('compra', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'compra de Aves'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {

            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Hembras ',
            y: <?php echo $ch; ?>
        }, {
            name: 'Machos ',
            y:  <?php echo $cm; ?>,
            sliced: true,
            selected: true
        }]
    }]
});
    </script>

