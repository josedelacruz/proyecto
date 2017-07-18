 <?php


 		$id_incubadora =$_GET['id_incubadora'];
 	    $cantidad =$_GET['cantidad'];
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $db->query("Insert into nacimiento  ( id_incubadora,cantidad) VALUES ('$id_incubadora',' $cantidad)");
      ?>