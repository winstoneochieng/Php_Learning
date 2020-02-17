<?php
    require 'header.php';
    //pull all data from the database
    require 'config.php';

    if (isset($_GET['msg'])){
        echo "<div class='alert alert-success'>Data deleted!</div>";
    }
    $sql = "SELECT * FROM `users`";

    $users = mysqli_query($conn, $sql);
    //exploding data
    while($row = mysqli_fetch_array($users)){
        $id=$row['id'];
        echo "<a href='details.php?id=$id'>";
            echo $row['id']. '<br>';
            echo $row['username']. '<br>';
            echo $row['firstname']. '<br>';
            echo $row['email']. '<br>';
            echo $row['password']. '<br>';
        echo "<a/>";
        echo "<a href='update.php?id=$id' class='btn btn-info'>Update</a>";
        echo "<a href='delete.php?id=$id' class='btn btn-danger'>Delete</a>";
    }

    echo "<a href='details.php'?name='johndoe'>Go to Details Page</a>";















    require 'footer.php';

?>

