<?php include('config.php') ?>
<?php 
$id = $_GET['id'];
$sql2 = "DELETE FROM add_notes WHERE id = '$id'";
$reslut3 = mysqli_query($conn, $sql2);
if($reslut3){
    header('Location:contact.php');
}
?>