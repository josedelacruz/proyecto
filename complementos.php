
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Lotes</a> </div>
  <h1>Lotes Activo</h1>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Lotes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="span6">Crianza</th>
                  <th class="span6">Produccion</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>
                     <?php
        $sql="select  from lote ";
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $query = $db->query($sql);
        
         foreach($db->query('SELECT * FROM lote' ) as $row) {
         foreach($db->query('SELECT * FROM Granja where id_granja = "'.$row['id_granja'].'"' ) as $row1) {
        
           
?>
                  
                   <option value="<?php  echo $row['id_lote'] ; ?> ">

               <?php 
                  
          
                echo $row1['nombre']."-"." Lote(".$row['id_lote'].") "; ?> 

              

                <?php

         }  }
            ?>
                  </td>
                  <td>Internet
                    Explorer 4.0</td>
                 
                </tr>
                
                  
                  
                
                 
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
       