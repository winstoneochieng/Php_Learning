<?php
    require 'config.php';
    if(isset($_POST['user_id'])){
        $id = $_POST['user_id'];
//        echo $id;

        //if button is clicked
        if (isset($_POST['btn_update'])){
            //grab data from the form
            $username = $_POST['username'] ;
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'] ;
            $email = $_POST['email'];

            echo $username.'<br>', $firstname. '<br>', $lastname. '<br>', $email. '<br>';
        }



        //update data in db
    }

?>
