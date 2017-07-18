   <?php
   $id_postura = $_GET['id_postura'];

        $sql="select  from lote ";
          $db = new PDO('mysql:host=localhost;dbname=c.a.c;charset=utf8mb4', 'root', 'Jose0424');

        $query = $db->query($sql);
        
        foreach($db->query("SELECT * FROM postura where id_postura = '$id_postura'  ") as $row) 
        {
        echo $row['huevos_f'] ; 
         }
      ?>
