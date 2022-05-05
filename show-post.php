<?php require('inc/header.php'); ?>
<?php require('inc/navbar.php'); ?>
<?php
require("inc/mysqlphpconn.php");


if(isset($_GET['id'])){
    $id=$_GET['id'];
} else
$id = 1;
$query="SELECT title,created_at,body FROM posts WHERE id=$id";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) ==0) {
    echo "0 result";
}else{
        $post= mysqli_fetch_assoc($result);

    


?>

<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="d-flex justify-content-between border-bottom mb-5">
                <div>
                    <h3><?= $post['title']; ?></h3>
                </div>
                <div>
                    <a href="index.php" class="text-decoration-none">Back</a>
                </div>
            </div>
            <div>
            <?= $post['body']; ?>
            </div>
        </div>
    </div>
</div>
<?php
}?>
<?php require('inc/footer.php'); ?>