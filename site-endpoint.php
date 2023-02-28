<?php

use \Main\Page;

use \Main\Model\User;

$app->get('/endpoint/hash', function() 
{

    $despassword = '1234';

    $hash = User::getHash( $despassword);

    echo "<pre>";
    var_dump($hash);
    exit;


});












?>