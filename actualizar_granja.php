<?php 

$id_granja=$_GET['id_granja'];
$estado=$_GET['estado'];

$sql="UPDATE `granja` SET `estado` = '$estado' WHERE `granja`.`id_granja` = $id_granja";
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $db->query($sql);

        echo $sql;




 ?>