
<?php

    

$controller = 'admin';
  
  
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 


   
require_once("{$ROOT}{$DS}model{$DS}modelUser.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="dashboard";	
	
switch ($action) {



		
	case "dashboard":
		$pagetitle = "Admin";
		$view = 'dashboard';
		require ("{$ROOT}{$DS}view{$DS}dash.php");
		break;
		
        case "exit":
            session_start();

unset($_SESSION['role']);
session_destroy();

            $view = "login";
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
			
			
			case "create":
				$pagetitle = "ceate superviseur";
				$view = "ajoutSuperviseur";
				require ("{$ROOT}{$DS}view{$DS}dash.php");
				break;
				
                case "gerer":
                    
                    $pagetitle = "Gerer les superviseur";
                    $view = "gererSuperviseur";
                    $tab_p = modelUser::getAll();
                    require ("{$ROOT}{$DS}view{$DS}dash.php");
                    break;

                    case "read":
                        if(isset($_REQUEST['id'])){
                        $id = $_REQUEST['id'];
                        $u = modelUser::select($id);
                        if($u!=null){
                        $pagetitle  = "Details de superviseur";
                        $view = "detailSuperviseur";
                        require ("{$ROOT}{$DS}view{$DS}dash.php");
                        }
                        }
                        break;



                        case "profil":
                            if(!isset($_SESSION)) 
                            { 
                                session_start(); 
                            } 


                           
                            $id = $_SESSION['id'];
                            $u = modelUser::select($id);
                            if($u!=null){
                            $pagetitle  = "Mon Profil";
                            $view = "profil";
                            require ("{$ROOT}{$DS}view{$DS}dash.php");
                            }
                          
                            break;


                }


?>