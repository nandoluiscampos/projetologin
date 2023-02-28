<?php

    namespace Main\Model;
    use \Main\DB\Sql;
    use \Main\Model;

    class User extends Model
    {
        const SESSION = 'projetologin-ourocenter';



        public static function login($deslogin, $despassword)
        {

            $sql = new Sql();

            $query = " 

            SELECT * FROM tb_users a 
            INNER JOIN tb_persons b ON a.idperson = b.idperson 
            WHERE a.deslogin = :deslogin
            ORDER BY a.dtregister DESC LIMIT 1;

            ";

            $results = $sql->select($query,[
                ':deslogin'=>$deslogin
            ]);

            if (count($results) === 0) 
            {

                throw new Exception("Usuário inexistente ou senha inválida");

            }

            $dataUser = $results[0];

                      

            if(password_verify($despassword, $dataUser['despassword']))
            {
                $user = new User();

                $user->setData($dataUser);

                $_SESSION[User::SESSION] = $user->getData();

                return $user;

            }
            else
            {
                throw new Exception("Usuário inexistente ou senha inválida");
            }


            // echo "<pre>";
            // var_dump($results);
            // exit;
        }

        public static function checkLogin()
        {
            if( isset($_SESSION[User::SESSION])   || !$_SESSION[User::SESSION] || (int)$_SESSION[User::SESSION]['iduser'] > 0)
            {

                return false;

            }
            else
            {
                return true;
            }
        }

        public static function verifyLogin( $routeAdmin = true)
        {



            if( User::checkLogin())
            {
                //nao esta logado
                if ($routeAdmin) 
                {
                    header("Location: /1234admin/login");
                    exit;
                } 
                else 
                {
                    header("Location: /login");
                    exit;
                }
                
            }
            else
            {
                //esta logado
                if ( !$routeAdmin ) 
                {
                   if (!(bool) $_SESSION[User::SESSION]['inadmin']) 
                   {
                        return true;
                   }
                    else 
                   {
                        header("Location: /1234admin/login");
                        exit;
                    
                   }
                   
                } 
                else 
                {
                  
                    if ((bool) $_SESSION[User::SESSION]['inadmin']) 
                    {
                        return true;
                    } 
                    else    
                    {
                        header("Location: /login");
                        exit; 
                        
                    }
                    


                }    
            }


        }





        public static function getHash($despassword)
        {



            return password_hash(

                $despassword,
                PASSWORD_DEFAULT,
                [

                    'cost'=>12

                ]

            );

        }


        public static function listAll()
        {

            $sql = new Sql();
            $query = "SELECT * FROM tb_users a INNER JOIN tb_persons b WHERE a.idperson = b.idperson ORDER BY
            a.dtregister DESC";

            $results = $sql->select($query);

            if(count($results) > 0)
            {
                return $results;

            }
        
            echo "<pre>";
            var_dump($results);
            exit;
        }
    }


?>