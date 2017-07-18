 <?php


 		$id_postura =$_GET['id_postura'];
 	    $huevos_resi =$_GET['huevos_resi'];
 	    $huevos_recha =$_GET['huevos_recha'];
 	    $huevos_encu =$_GET['huevos_encu'];
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $db->query("Insert into incubadora  ( id_postura,huevos_resi,huevos_recha,huevos_encu) VALUES ('$id_postura',' $huevos_resi' ,' $huevos_recha','huevos_encu')");
      ?>