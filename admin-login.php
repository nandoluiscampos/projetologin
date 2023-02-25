<?php
 
    use \Main\PageAdmin;
    use \Main\Validate;

    $app->post('/1234admin/login', function() 
    {
        if (!isset($_POST['email'] || $_POST['email'] == '' ) 
        {
            header('Location: /1234admin/login');
            exit;
        }

        if ( $deslogin = Validate::validateEmail($_POST['email'])) === false)
        {
            header("Location: /1234admin/login");
            exit;
        }



        $app->post('/despassword/login', function() 
        {
            if (!isset($_POST['despassword'] || $_POST['despassword'] == '' ) 
            {
                header('Location:/1234admin/login');
                exit;
            }
    
            if ( $despassword = Validate::validatePassword($_POST['despassword'])) === false)
            {
                header("Location: /1234admin/login");
                exit;
            }
        });



    });


    echo "<pre>";
    var_dump($deslogin);
    exit;

    $app->get('/1234admin/login', function() 
    {
        $page = new PageAdmin();
    
        $page->setTpl("login");
    });

?>