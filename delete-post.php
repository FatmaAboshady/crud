<?php

require("inc/mysqlphpconn.php");
if(isset($_GET['id'])){

    $id=$_GET['id'];
    $query="DELETE FROM posts WHERE id=$id";
    $result = mysqli_query($conn,$query);
    header("location: index.php");
}

?>