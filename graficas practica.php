<?php
$db = mysql_connect('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');
$query = "SELECT * FROM `salida` WHERE motivo=3"
$result = mysql_query($db,$query);
?>

<!Doctype html>
<html>
    <head>
      <title> practicando graficas</title>>
      <script type="text/javascript" src="https://www.gstatic.com/charts/45/loader.js"></script>
      <script type="text/javascript"> 
      google.charts.load('current'{'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() 
      {
      	 var data = google.visualization.arrayToDataTable([
      	      ['motivo'],
      	      <?php
               while($row = mysql_fetch_array(result)) 
               {
                  echo "['".$row["motivo"]."],";

               }     	      
      	      ?>

      	 	]);
      	 var opcion:{
      	 	 title:'Nave Transferidas'
      	 	 is3D:true
     	    };
     	 var chart = new google.visu alization.piechart(document.getElementById('piechart')); 
     	 chart.draw(data, opcion);

      }

      </script>
     </head>
     <body>
     	 <br /><br />
     	 <div style="width:400px;">
     	      <h1 align="center"> graficas con msql</h1>
              <br />
              <div id="piechart" style="width: 400px; height: 400px;"></div>

     </body>>
</html>