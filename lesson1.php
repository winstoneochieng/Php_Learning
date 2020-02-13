<?php
//php comments
//php files can contain text, html, css, javascript.and php code
//php code is executed on the server,and the result is returned to the browser as plain html
//php files have extension .php
echo "John Doe <br>"; //php statement must end in semi colon
//echo outputs data/content
//John Doe is the data to be displayed on the browser
echo "coding php <br>";
echo "<h1>coding php</h1> <br>";
print "Learning code is dope <br>";

//variables
//a variable starts with $ sign,followed by the name of the variable
//a variable name must start with a letter or the underscore character
//a variable name cannot start with a number
//a variable name can only contain alphanumeric characters and underscores (A-Z, 0-9 ,and _)
//variable names are case sensitive (&age and $AGE are two different variables)
$name = "John Doe <br>";
$_country = "Kenya <br>";
$age = 2020;
echo $age;
echo "<br>";
echo $name;
$favcar = "Maybach";
$countryoforigin = "Germany";
echo "This is my $favcar from $countryoforigin <br>";
echo "This is my ".$favcar. " from ".$countryoforigin. "<br>";
echo $favcar.$countryoforigin. "<br>";
echo 34 + 23;
echo "<br>";=




//string functions
//function-code that does repetetive tasks
echo strlen('Hello world');
echo "<br>";
$letters_in_my_name = strlen("Winstone Ochieng");
echo "<br>";
echo $letters_in_my_name;
//counting words in a string- use str_word_count() function
echo str_word_count('coding in php is fun');
echo '<br>';
$words_in_my_name = str_word_count('winstone ochieng');
echo $words_in_my_name;
echo '<br>';
//reversing a string-use strrev() function
$name = 'kobe bryant';
echo strrev($name);
echo '<br>';
//searching pos of a text within a string: use strpos() function
echo strpos("I am kenyan", "kenyan");
echo "<br>";
//replace a text in a string: use str_replace()
echo str_replace('kenyan', 'ugandan', 'I am Kenyan');
echo "<br>";

//2.Integers
//Non decimal numbers
$numbers_of_cows = 18;
echo $numbers_of_cows;
echo "<br>";
var_dump($numbers_of_cows); //checks a datatypes of a variable
echo "<br>";
is_int($numbers_of_cows);
echo "<br>";
echo is_int($numbers_of_cows);
echo "<br>";
is_int($name);
echo "<br>";
echo is_int($name);
echo "<br>";
is_integer($numbers_of_cows);
is_long($numbers_of_cows);
echo "<br>";


//3.Float
//numbers with decimal point
$height = 3.5;
echo $height;
echo "<br>";
is_float($height);
echo "<br>";
is_double($height);
var_dump(is_float($height));
echo "<br>";

//casting/transforming/changing float to an integer
$volume_float = 700.623;
$volume_integer = (int)$volume_float;
echo $volume_integer;
echo "<br>";

//casting/transforming/changing float to an integer
$age_string = "23";
$age_integer = (int)$age_string;
echo $age_integer;
echo '<br>';
//4.Boolean
$is_tall = true;
$is_lightskin=false;
echo $is_lightskin;
echo '<br>';
//5.Array
//6.Object
//7.Null




?>
