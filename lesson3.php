<?php
//php operators: used to perform operations on variables and values
//1.Arithmetic operators
//Used with numerical values
//1. + Addition
echo '<br>';
$sum = 4 + 3;
echo $sum;
echo '<br>';

//2. - Substraction
echo 3 - 3;
echo '<br>';
$sub = 4 - 3;
echo $sub;
echo '<br>';
//3. * Mult
echo 3 * 3;
echo '<br>';
$mult = 4 * 3;
echo $mult;
echo '<br>';
//4. / div
echo 3 / 3;
echo '<br>';
$div = 4 / 3;
echo $div;
echo '<br>';
//5. % modulus
echo 3 % 3;
echo '<br>';
$mod = 4 % 3;
echo $mod;
echo '<br>';
//6. **Exponential
echo 3 ** 3;
echo '<br>';
$exp = 4 ** 3;
echo "The exp of 3**3 is ".$exp;
echo '<br>';

//2.Assignment
//used to write values to variables
//-
//+:
$gender = "Male";

//+= : Addition Assignment
$a = 100;
$b = 200;
//$a = $a + $b;
$a += $b;
echo $a;
echo '<br>';
//-=:Substraction Assignment



//3.Comparison
//used to compare two values
//COMPARISON OPS RETURN A BOOLEAN DATA TYPE ONLY

//1.== Equals:returns true if two values are equal
$x=10;
$y=10;
$check =$x ==$y; //returns true
var_dump($check);
echo '<br>';
//Data from database
$db_username = 'Johndoe';
$db_password = '123pass';
//Data from user
$username = 'Johndoe';
$password = '123pass';
//Check if data from user matches data from database:user==ops
$authenticate = $username == $db_username; //returns true
//change username
$username = 'kevindoe';
$authenticate = $username == $db_username; //returns false
var_dump($authenticate);
echo '<br>';

//2.===:Identical:returns if two values/variables are equal and they are of the same datatype
$check = $username === 'Johndoe';
var_dump($check);
echo '<br>';

//3. != not equal to :returns true if one variable is not equal to another one
$email = 'example@example.com';
$check = $email != 'johndoe@gmail.com';//returns true
var_dump($check);
echo '<br>';

//4. !==:Not identical:returns true if two variables are not identical or they are of not of the same data type
$name = 'kevin doe';//string
$age = 21;//integer
$check = $name !== $age; //returns true
var_dump($check);
echo '<br>';

//5.> greater than:checks if one value/variable is greater than the other
$check = 3 > 2;//returns true
var_dump($check);
echo '<br>';

$check = 3 < 2;//returns false
var_dump($check);
echo '<br>';

//5.< lesser than:checks if one value/variable is lesser than the other
$check = 2 < 3;//returns true
var_dump($check);
echo '<br>';

$check = 3 < 2;//returns false
var_dump($check);
echo '<br>';


//4.Logical
//The php logical operators are used to combine conditional statements

//1.and:returns true if both conditions are true
$check = 100 == 100 and 200 == 200;
var_dump($check);
echo '<br>';
$age = 18;
$country = 'kenya';
$check = $age == 18 and $country == 'kenya';
var_dump($check);
echo '<br>';

//2.or : returns true if either one of the condition is true
if ($age == 17 or $country == 'kenya'){
    echo 'correct!';
};
echo '<br>';


