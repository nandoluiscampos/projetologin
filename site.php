<?php

use \Main\Page;

use \Main\Model\User;

$app->get('/termos', function() 
{

    $page = new Page();

    $page->setTpl("terms");

});



$app->get('/sobre', function() 
{
    $name = 'Mundo';

    if(isset($_GET['nome']) && $_GET['nome'] != '')
    {

        $name = ucwords(strtolower($_GET['nome']));

    }

    $page = new Page();

    $page->setTpl("about", ['name'=>$name]);

});







    $app->get('/', function() 
    {
        $results = User::listAll();

        $page = new Page();
    
        $page->setTpl("index",['results'=>$results]);
    
    });

?>