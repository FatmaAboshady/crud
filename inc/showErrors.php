<?php if(isset($_SESSION['errors'])):

            
?>
<div class=" alert alert-danger ">
<?php foreach($_SESSION['errors'] as $error):?>
    <h2><?php echo $error;?></h2>

<?php  endforeach?>

</div>

<?php endif;
unset($_SESSION['errors']) ;?>