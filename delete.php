<?php
    require 'config.php';
    //grab id
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE id='$id'";

    if (mysqli_query($conn, $sql)){
        header('location:index.php?msg');
    }
}



?>
