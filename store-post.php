<?php
require("inc/mysqlphpconn.php");
session_start();
function test_input($data) {
    $data = trim(htmlspecialchars($data));
    return $data;
    }
if(isset($_POST['submit'])){
    $title=test_input($_POST['title']) ;
    $body=test_input($_POST['body']);
    $errors= [];

    if( empty($body)){
        $errors[]="body is require";
    }elseif(!is_string($body)){
        $errors[]="body must be string";
    }
      



    
        if( empty($title)){
            $errors[]="title is require";
        }elseif(!is_string($title)){
            $errors[]="title must be string";
        }elseif(strlen($title)>255){
            $errors[]="title must be less 255";
        }

       





if(empty($errors)){
        
    


    $sql= "INSERT INTO posts (title, user_id, body) VALUES ('$title', 1, '$body')";
 
    
     
     $retval = mysqli_query($conn, $sql);
             
      if(! $retval ) {
          echo "Error creating table: " . mysqli_error($conn);
 }
             
      echo header("location : index.php ");



}else {
$_SESSION['errors']=$errors;
header("location: create-post.php");

}
}