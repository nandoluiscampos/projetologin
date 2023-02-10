<?php
 
    use \Main\PageAdmin;

    $app->get('/1234admin', function() 
    {
        $page = new PageAdmin();
    
        $page->setTpl("index");
    });

?>