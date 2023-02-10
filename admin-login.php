<?php
 
    use \Main\PageAdmin;

    $app->get('/1234admin/login', function() 
    {
        $page = new PageAdmin();
    
        $page->setTpl("login");
    });

?>