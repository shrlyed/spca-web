<?php
include("include/connection.php");


    if (isset($_GET['id_cat'])) {
  
        $id = ($_GET["id_cat"]);
        $query = "DELETE FROM cat WHERE id_cat=$id";
        echo $query;
        mysqli_query($conn, $query);
        echo "<script>alert('Cat information has been deleted!');window.location='list_of_cats.php';</script>";
    }   

?>