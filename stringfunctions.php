<?php
#substr()
//returns a portion of a string
    $output = substr('Hello',2,3);
    $output = substr('Hello',-2,3);//starts from end of string
    echo $output;

 #strpos
//Finds the position of the first occurrence of a sub string
    $output = strpos('hello world','o');
    echo $output;

#strrpos
//Finds the position of the last occurrence of a sub string

# trim()
//strips whitespace

$text = 'Hello world              ';
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);

# strtoupper
//Makes everything upper case
$output = strtoupper('Hello world');
echo $output;

#ucwords()
# capitalize every word

$output = ucwords('hello world');
echo $output;

#str_replace()
//replace all occurrences of a search string with a replacement

$text = 'Hello world';
$output = str_replace('world', 'Everyone',$text);
echo $output;

#is_string()
//checks if string

$val = 'Hello';
$output = is_string($val);
echo $output. '<br>';

//checking array

$values = array(true, false, null, 43, 'abc', 0,'0');

foreach ($values as $value){
    if (is_string($value)){
        echo "{$value} is a string <br>";

    }else{
        echo "$value is not a string! <br>";
    }
}

#gzcompress()
//compress a string



#gzuncompress()
//uncompresses a string










?>


