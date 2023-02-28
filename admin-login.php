<?php
 
    use \Main\PageAdmin;
    use \Main\Validate;
    use \Main\Model\User;

    $app->post('/1234admin/login', function() 
    {
        if (!isset($_POST['email']) || $_POST['email'] == '' )
        {
            header('Location: /1234admin/login');
            exit;
        }

        if (( $deslogin = Validate::validateEmail($_POST['email'])) === false)
        {
            header("Location: /1234admin/login");
            exit;
        }
    

            if (!isset($_POST['password']) || $_POST['password'] == '' ) 
            {
                header('Location:/1234admin/login');
                exit;
            }
    
            if (($despassword = Validate::validatePassword($_POST['password'])) === false)
            {
                header("Location: /1234admin/login");
                exit;
            }

            // echo "<pre>";
            // var_dump($deslogin);
            // var_dump($despassword);
            // exit;


            User::login($_POST['email'], $_POST['password']);
            
            header("Location: /1234admin");
            exit;




    });

    $app->get('/1234admin/login', function() 
    {
        $page = new PageAdmin();
    
        $page->setTpl("login");
    });

?>