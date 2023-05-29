<?php
$conn = mysqli_connect('localhost','root','','mynotes');
if(!$conn){
    echo "datatbase not connected";
}
else{
    echo "database connected";
}
?>

