<?php
//A function is a block of statements that can be used repeatedly in a program.
//A function will not execute automatically when a page loads.
//A function will be executed by a call to the function

//function creation/declaration
//a function without parameters
function greetings1(){
    echo "hello world, I am a dev! <br>";

}

//a function with parameters

function greetings2($name){
    echo "Hello world, my name is $name and I am php dev<br>";

}

//function with more than one parameter
function greetings3($name, $country, $age){
    echo "Hello world, my name is $name, $age and I am a Dev, from $country <br>";
}

//function with default arguments
function greetings4($county = 'Kiambu'){
    echo "$county <br>";
}

//function that return a value: use return statement
function greetings5(){
    return "I am a geek";
}

//calling/using the function
greetings1();
greetings2("JohnDoe");
greetings3("JohnDoe", "Kenya", 23);
greetings4();//with default argument
greetings4('Mombasa');

//calling a function that returns a value
//create a variable that will store the returned value
$jocker = greetings5();
echo $jocker. "<br>";
//
//function calculateDeni($geek1, $geek2,$geek_default=300){
//    $sum = $geek1 + $geek2 + $geek_default;
//    return $sum;
//}
//$amount = calculateDeni('100', '200');
//$amount2 = calculateDeni('300');
//   echo "TOTAL: $amount <br>";
//   $totalAmout = $amount + $amount2;
//echo $totalAmount;

//A function that takes an array as an arg
function loopArray($name_of_array){
    foreach ($name_of_array as $item){
        echo "$item <br>";
    }
echo "<br>";

}function loopArray2($name_of_array,$myforeach=true){
    if($myforeach){
//       if foreach
        echo "for each loop executing <br>";
        foreach ($name_of_array as $item){
        echo "$item <br>";
        }
    }else{
        echo "for loop executing <br>";
        for($x=0;$x<count($name_of_array);$x++){
            echo "$name_of_array[$x]<br>";
        }
    }
}
$hobby = array('Reading','Music','Coding');
loopArray($hobby);
loopArray2($hobby);

function areaCircle($radius, $cm=true){
    $pie = 22/7;
    $area = $pie * $radius * $radius;
    if ($cm){
        //if unit of measurement is cm
        echo "The area in centimeter is $area cm sq <br>";
    }else{
        //if unit of measurement is m
        echo "The area in meters is $area m sq <br>";
    }
}
areaCircle(7);//in cm
areaCircle(7, $cm=false);//in m










?>

