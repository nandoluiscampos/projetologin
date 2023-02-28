<?php
 
    use \Main\PageAdmin;
    use \Main\Model\User;

    $app->get('/1234admin', function() 
    {

        User::verifyLogin(true);

        // echo "<pre>";
        // echo "View do admin OK <br>";
        // var_dump($_SESSION);
        // exit;


        $page = new PageAdmin();
    
        $page->setTpl("index");
    });

?>