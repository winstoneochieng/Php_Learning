<?php
//Conditional statements are used to perform different actions based on different conditions
//To allow your code to perform diff actions based on diff variables

//php has the following conditional statements

//1.if statement - executes some code if one condition is true

// if (condition){
//     code to execute;
// }


 $age = 16;
 if ($age == 16){
  echo "You can code!";
 }
 echo '<br>';

//2.if...else statement - executes some code if a condition is true and another code if that condition is false
if ($age > 17){
   echo "You can code!";
}else{
   echo 'False: Age is under 17!';
}
 echo '<br>';

$db_name = 'JohN';
$user_name = 'John';
if ($user_name != $db_name){
     echo '<p style="color=red"> Wrong credentials!<a href="#">Login</a></p>';
}else{
    echo '<p style="color=green">Welcome!</p>';
}

//3.if...elseif...else statement - executes different codes for more than two conditions

//if (condition){
//    condition to execute if true;
//}elseif (condition){
//    condition to execute if true;
//}elseif (condition) {
//    condition to execute if true;
//}else{
//    code to execute if above conditions are false
//}

$color = 'Blue';
if ($color == 'Red'){
        echo '<h1>MANU FAN</h1>';
}elseif ($color == 'White'){
        echo '<h1>TOTE FAN</h1>';
}elseif ($color == 'Blue'){
        echo '<h1>CHEL FAN</h1>';
}else{
    echo 'None of the above';
}

//4.switch statement - selects one of many blocks of code to be executed

//switch (n){
//    case label1:
//        code to execute if n = label1
//        break
//    case label2:
//        code to execute if n = label2
//    break
//    case label3:
//        code to execute if n = label3
//    break
//    default{
//         code to execute if the above conditions are false
//    }
//}

$color = 'White';
switch ($color){
    case 'Blue':
        echo '<p>CHELSEA</p>';
    break;

    case 'Red':
        echo '<p>MANCHESTER</p>';
    break;

    case 'White':
        echo '<p>TOTTENAM</p>';
    break;

    default:
        echo 'None of the above';

}






?>
