<?php
    require 'header.php';
    require 'config.php';
    require 'footer.php';
    echo "Welcome to details page <br>";
    //grad id from url using the $_GET[]
//but check if the id was set
if (isset($_GET['id'])){
    $id = $_GET['id'];//use this id to select user from table
    $sql = "SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password` FROM `users` WHERE id='$id'";



$user = mysqli_query($conn, $sql);
//exploding data
while($row = mysqli_fetch_array($user)) {
    $id = $row['id'];

    echo $row['id'] . '<br>';
    echo $row['username'] . '<br>';
    echo $row['firstname'] . '<br>';
    echo $row['email'] . '<br>';
    echo $row['password'] . '<br>';
 }

}
?>
