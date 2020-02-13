<?php
//Loops are used to execute the same block of code again and again, as long as a certain condition is true

//1.while - loops through a block of code as long as the specified condition is true

//while (condition){
//    code to execute;
//}

$x=0;//initializes the starting point of the loop
while ($x <= 10) {//condition being tested
    echo $x. 'Hello World <br>';
    $x++; // pre-increment value/operation
}

$x = 0;
while ($x <= 20){
    if($x == 10){
        echo $x. 'The middle of the range <br>';
    }
    echo $x. '<br>';
    $x++;//operation
}

$z = 0;
while($z <= 100)
 if($z % 3 == 0) {
     echo $z . '<br>';

      $z++;
 }



//2.do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true

//do{
//    code to execute;
//}while(condition);

    $y = 0;
do {
    echo $y . '<br>';
    $y++;//operation
}while($y <= 5);

//3.for - loops through a block of code a specified number of times

//for (initial counter;test counter;increment counter){
//    code to execute if the condition is true
//}

for ($x = 0; $x < 100; $x++) {
    echo $x. '<br>';
}

//foreach - loops through a block of c  ode for each element in an array

//using a for loop,loop from zero to 100 if a number is a multiple of 3, echo FIZZ, if a no is a multiple of 5, echo BUZZ

//Printing out numbers multiples of 3





?>