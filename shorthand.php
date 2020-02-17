<?php

    $loggedIn = false;
    $arr = [1, 2, 3, 4, 5]
/*
    if ($loggedIn){
        echo 'Logged in!';
    }else{
        echo 'Not logged in!';
    }

  OR see below
  */

//    echo ($loggedIn)? 'Logged in!' : 'Not logged in!';

//-----
/*
    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;
    echo '<br>';

//Nesting statements
    $age = 20;
    $score = 15;

    echo "Your perfomance is:". ($score > 10 ? ($age > 10 ? 'AVERAGE': 'EXCEPTIONAL'):($age >10 ? 'HORRIBLE':'AVERAGE')). '<br>';
*/
?>

<div>
    <?php if ($loggedIn){?>
    <h1>WELCOME USER!</h1>
    <?php }else{?>
    <h1>WELCOME GUEST</h1>
    <?php }?>
</div>

<div>
    <?php if ($loggedIn): ?>
        <h1>WELCOME USER!</h1>
    <?php else : ?>
        <h1>WELCOME GUEST</h1>
    <?php endif;?>
</div>

<div>
    <?php foreach ($arr as $val): ?>
    <?php echo $val ?>
    <?php endforeach; ?>
</div>