<?php
    $servername = 'localhost';
    $username = 'root';
    $password =  '';
    $db_name = 'miteveningdb';
//php has helper functions that will make database interactions easy
//To connect to a database use the php function called mysql_connect()
//mysql function returns a boolean datatype
    $conn = mysqli_connect($servername,$username,$password,$db_name);
//check if conn is successful
    if(!$conn){
        die ("Connection to DB unsuccessful <br>".mysqli_connect_error());
    }else{
        echo "Connection Successful! <br>";
    }


////add/insert data into the db table:users mysqli_query()
//$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'john doe','john','doe','john@gmail.com','pass12345')";
//if(mysqli_query($conn,$sql)){
//    echo "Data added successfully:$sql<br>";
//}else{
//    echo "Data not Added! <br>".mysqli_error($conn);
//    echo "sql<br>";
//}




?>