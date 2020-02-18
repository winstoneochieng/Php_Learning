<?php
require 'header.php';
require 'config.php';
$id = $username = $firstname = $lastname = $email = '';
$username_err = $firstname_err = $lastname_err = $email_err = '';

echo "Welcome to Update Page <br>";
//grad id from url using the $_GET[]
//but check if the id was set
if (isset($_GET['id'])){
    $id = $_GET['id'];//use this id to select user from table
    $sql = "SELECT `id`, `username`, `firstname`, `lastname`, `email`, `password` FROM `users` WHERE id='$id'";



    $user = mysqli_query($conn, $sql);
//exploding data
    while($row = mysqli_fetch_array($user)) {

        $id = $row['id'] ;
        $username = $row['username'] ;
        $firstname = $row['firstname'];
        $lastname = $row['lastname'] ;
        $email = $row['email'];
//        echo $username, $firstname, $lastname, $email;
    }

}
?>
<form action="update_handler.php" method="post">
    <fieldset>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" value="<?php echo $username?>">
            <input type="text" hidden name="user_id" value="<?php echo $id?>">
        </div>
        <div class="form-group">
            <label for="">Firstname</label>
            <input type="text" name="firstname" value="<?php echo $firstname?>">
        </div>
        <div class="form-group">
            <label for="">Lastname</label>
            <input type="text" name="lastname" value="<?php echo $lastname?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $email?>">
        </div>
        <button type="submit" name="btn_update" class="btn btn-info">Update</button>
    </fieldset>
</form>



<?php
require 'footer.php';
?>
