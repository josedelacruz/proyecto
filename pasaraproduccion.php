
<?php 





$id_lote=$_GET['id_lote'];
$fecha=$_GET['fecha'];
$estado=$_GET['estado'];


$sql="UPDATE `lote` SET estado='$estado' ,`fecha_finalC` = '$fecha 00:00:00' ,  `fecha_inicioP` = '$fecha 00:00:00' WHERE `lote`.`id_lote` = $id_lote";
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $db->query($sql);


        echo $sql;




?>
