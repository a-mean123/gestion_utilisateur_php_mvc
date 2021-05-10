<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;


$controleur_default = 'admin';


if(!isset($_REQUEST['controller']))
    $controller = $controleur_default;

    else $controller = $_REQUEST['controller'];

    switch($controller){

      
            
           

                    
    


                        case 'admin':
                            session_start();

                            if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
                                {
	                        	header("location: index.php?controller=login");
                                }

                                if(($_SESSION['role']==1) || ($_SESSION['role']==2))
                                    {

                                     require("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");

                        
                                    }
                                    else{
                                      require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");

                                    }
                            break;
    

                            case 'superviseur':
                                session_start();
    
                                if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
                                    {
                                    header("location: index.php?controller=login");
                                    }
    
                                    if(($_SESSION['role']==2))
                                        {
    
                                         require("{$ROOT}{$DS}controller{$DS}controllerSuperviseur.php");
    
                            
                                        }
                                        else{
                                          require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
    
                                        }
                                break;

                        case 'login':
                            require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
                           break;   

                           case 'user':
                            require("{$ROOT}{$DS}controller{$DS}controllerUser.php");
                           break;  
                           case 'erreur':
                            require("{$ROOT}{$DS}controller{$DS}controllerErreur.php");
                           break;  
    }


?>