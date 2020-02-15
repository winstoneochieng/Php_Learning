<?php
//SUPERGLOBALS
//Some predefined variables in PHP are "superglobals", which means that they are always accessible,
// regardless of scope - and you can access them from any function, class or file without having to do anything special.
//having to do anything special

//The php superglobal variables are:
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

//1._SERVER
//has information for paths, headers
//$_SERVER['ELEMENT']
//Find location of php file
echo $_SERVER['PHP_SELF'].'<br>';

//finding host name
echo $_SERVER['SERVER_NAME']. '<br>';
echo $_SERVER['HTTP_HOST']. '<br>';


//Or Server Array
$server = [
       'Host Server Name' => $_SERVER['SERVER_NAME']. '<br>',
        'Host Header' => $_SERVER['HTTP_HOST']. '<br>',
        'Server Software' => $_SERVER['SERVER_SOFTWARE']. '<br>',
        'Document Root' => $_SERVER['DOCUMENT_ROOT']. '<br>',
        'Current Page' => $_SERVER['PHP_SELF']. '<br>',
        'Script Name' => $_SERVER['SCRIPT_NAME']. '<br>',
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']. '<br>',
];
//print_r($server);

//collecting data using $_REQUEST method
echo $_SERVER['REQUEST_METHOD']. '<br>';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_REQUEST['jina'];
    $email = $_REQUEST['arafa'];
    echo "NAME IS $name and EMAIL IS $email <br>";
}
//collecting data using $_POST method

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    echo 'USING THE $_POST[] '.' <br>';
    echo "NAME IS $name and EMAIL IS $email <br>";
}

?>


<h1>Collecting data using $_REQUEST</h1>
<form action="superglobals.php" method="post">
    <input type="text" name="jina" placeholder="Enter Name">
    <input type="email" name="arafa" placeholder="Enter Email">
    <input type="Submit" value="send data">
</form>

<h1>Collecting data using the $_POST</h1>
<!--We use $_POST to collect data from a form using the post method-->

<!--$_GET :used to collect data sent via the URL-->
<?php
//Receive data using $_GET[]
$the_name = $_GET['name'];
$the_age = $_GET['age'];
echo "$the_name <br>";
echo "$the_age <br>";
?>
<a href="superglobals.php?name=Antony&age=23">Send</a>