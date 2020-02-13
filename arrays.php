<?php
//an arrray is a special variable which can hold more than one value at once
//to create an array: use tha array() function
//php has 3 types of array
//1.indexed arr
$shopping_list = array("soap","sugar","mkate","maize flour","rice","omo","milk");

//Accessing array values: use index numbers
echo $shopping_list[4].'<br>';
$get_rice = $shopping_list[4];
echo $get_rice. '<br>';
echo "Today I will eat $shopping_list[4] and $shopping_list[6]'<br>";
echo 'Today I will eat'.' '. $shopping_list[4].' '.'and'.' ' .  $shopping_list[6]. '<br>';

//counting the number of items in an indexed array: use count() function
$num_items = count($shopping_list);
echo $num_items. "<br>";
echo '<br>';

//looping through indexed arr
//you can use :
//a.for loop
for ($i = 0; $i < $num_items; $i++){
    echo "$i $shopping_list[$i]<br>";
}
echo '<br>';

//b.for each
//foreach ($nameofarray as $variable_to_hold_item_per_loop){
//    echo $variable_to_hold_item_per_loop
//}
foreach ($shopping_list as$item){
    echo "$item <br>";
}
echo '<br>';

//2.Associative arr - key;value
$shopping_list2 = array("soap"=>"500g","sugar"=>"1kg","mkate"=>"800g","maize flour"=>"5kg","rice"=>"1kg","omo"=>"2kg","milk"=>"1ltr");

//Accessing itemms in an associative array
$seth = $shopping_list2['maize flour'];
echo $seth. '<br>';
echo '<br>';

//looping through associative array
foreach ($shopping_list2 as $my_key => $my_value){
    echo "KEY : $my_key => VALUE: $my_value <br>";
}
$users = array(
    "1"=>array("JohnDoe","johnd@gmail.com","pass1"),
    "2"=>array("MaryDoe","maryd@gmail.com","pass2"),
    "3"=>array("MikeDoe","miked@gmail.com","pass3"),
    "4"=>array("JaneDoe","janed@gmail.com","pass4"),
    "5"=>array("Paul","paul@gmail.com","pass5"),
);
foreach ($users as $my_key => $my_value){
    foreach ($my_value as $value)3{
        echo "ID NO $my_key is $value <br>";
    }
}

//3.Multidimensional arr.

//creating an array





?>