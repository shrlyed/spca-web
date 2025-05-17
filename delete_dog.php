<?php
include("include/connection.php");


    if (isset($_GET['id_dog'])) {
  
        $id_dog = ($_GET["id_dog"]);
        $query = "DELETE FROM dog WHERE id_dog=$id_dog";
        echo $query;
        mysqli_query($conn, $query);
        echo "<script>alert('Dog information has been deleted!');window.location='list_of_dogs.php';</script>";
    }   

?>