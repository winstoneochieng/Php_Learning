<?php
require 'header.php';
require 'config.php';
//input: username, firstname, lastname, email, password, confirm password
//algorithm :step by step solution to a problem
//1. define empty variables to store incoming data
$username = $firstname = $lastname = $email = $password1 = $password2 ='';
//2.define empty variables to store errors
$username_err = $firstname_err = $lastname_err = $email_err = $password1_err = $password2_err ='';
//3.check the request method
if ($_SERVER['REQUEST_METHOD']=='POST') {
    //3.1 grab data using $_POST superg
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];

//    echo $username,$firstname,$lastname,$email,$password1,$password2;

    if (empty($username)) {
        $username_err = "Please fill field";
    } else {
//        if not empty, clean data
        $username = mwoshomwosho($username);
    }
    if (empty($firstname)) {
        $firstname_err = "Please fill field";
    } else {
        $firstname = mwoshomwosho($firstname);
    }
    if (empty($lastname)) {
        $lastname_err = "Please fill field";
    } else {
        $lastname = mwoshomwosho($lastname);
    }
    if (empty($email)) {
        $email_err = "Please fill field";
    } else {
        $email = mwoshomwosho($email);
    }
    if (empty($password1)) {
        $password1_err = "Please fill field";
    }
    if (empty($password2)) {
        $password2_err = "Please fill field";
    }
    //check if passwords matched
    if ($password1 != $password2) {
        $password1_err = "Passwords did not match";
    } else {
//    check no of chars
        if (strlen($password1) < 8) {
            $password1_err = "Password is less than 8 characters";
        }else{
            $password1 = md5($password1);//password hashing
            //add/insert data into the db table:users mysqli_query()
            $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$username','$firstname','$lastname','$email','$password1')";
            if(mysqli_query($conn,$sql)){
//                echo "Data added successfully:$sql<br>";
                header('location:index2.php');
            }else{
                echo "Data not Added! <br>".mysqli_error($conn);
                echo "sql<br>";
            }
        }
    }


}

//4.Echo received data


function mwoshomwosho($data){
    //remove white spaces
    $data = trim($data);
    //remove slashes
    $data = stripslashes($data);
//    remove special characters
    $data = htmlspecialchars($data);
    //return clean data
    return $data;
}


?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <label for="">Username</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $username_err?></span><br>
        <input type="text" name="username" placeholder="Enter Username"><br>

        <label for="">Firstname</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $firstname_err?></span><br>
        <input type="text" name="firstname" placeholder="Enter Firstname"><br>

        <label for="">Lastname</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $lastname_err?></span><br>
        <input type="text" name="lastname" placeholder="Enter lastname"><br>

        <label for="">Email Address</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $email_err?></span><br>
        <input type="email" name="email" placeholder="Enter Email Address"><br>

        <label for="">Password</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $password1_err?></span><br>
        <input type="password" name="pass1" placeholder="Enter Password"><br>

        <label for="">Confirm Password</label><span style="color: red">*</span>
        <span style="color: #ff0053"><?php echo $password2_err?></span><br>
        <input type="password" name="pass2" placeholder="Confirm Password"><br>

        <button type="submit" name="signup-btn">Signup</button>
    </fieldset>
</form>

<?php
require 'footer.php';

?>
