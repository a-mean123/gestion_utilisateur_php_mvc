
<?php

    

$controller = 'user';
  
  

   
require_once("{$ROOT}{$DS}model{$DS}modelUser.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="dashboard";	
	
switch ($action) {

			
			case "create":
				$pagetitle = "ceate superviseur";
				$view = "ajoutSuperviseur";
				require ("{$ROOT}{$DS}view{$DS}dash.php");
				break;

			case "created":
                if(isset($_REQUEST['name']) && isset($_REQUEST['lastname']) && 
                
                isset($_REQUEST['email']) && isset($_REQUEST['poste']) && 
                isset($_REQUEST['contact']) &&
                isset($_REQUEST['username']) && isset($_REQUEST['password'])){
					
				
					$name = $_REQUEST["name"];
                    $lastname = $_REQUEST["lastname"];
                    $email = $_REQUEST["email"];
					$poste = $_REQUEST["poste"];
					$contact = $_REQUEST["contact"];
					
					$username = $_REQUEST["username"];
					$password = $_REQUEST["password"];
                    $role = "2";
                    $enable = true;
				
					
					$id = NULL;
		
					
						$u = new ModelUser($name, $lastname, $email, $poste ,$contact ,$username ,$password, $role, $enable);	
						$tab = array(
                            "id" => $id,  
                            
                        "name" =>$name,
                        "lastname" =>$lastname,
                        "email" =>$email,
                        "poste" =>$poste,
                        "contact" =>$contact,    
						"username" => $username,
						"password" => $password,
                        "role" => $role,
                        "enable" => $enable
					
						);				
						$u->insert($tab);
					
						header('Location: index.php?controller=admin&action=gerer');
					
				}
				break;
		
                case "block":
                    $id = $_REQUEST["id"];
                    $enable = $_REQUEST["enable"];

                    $u = new ModelUser('', '', '', '' ,'' ,'' ,'', '' ,'');
                    $o = ModelUser::select($id);
                    if($o!=null){
                        echo 'eyy';

                        if($enable == 1){

                            $u = $o->enable($id , 0);		
                            $pagetitle = "modifié";
                            $view = "gererSuperviseur";
                            header('Location: index.php?controller=admin&action=gerer');
                        }
                        else{
                            $u = $o->enable($id , 1);		
                            $pagetitle = "modifié";
                            $view = "gererSuperviseur";
                            header('Location: index.php?controller=admin&action=gerer');
                        }


                       
                    }


                break;

                case "updated":
                    if(isset($_REQUEST['name']) && isset($_REQUEST['lastname']) && 
                    
                    isset($_REQUEST['email']) && isset($_REQUEST['poste']) && 
                    isset($_REQUEST['contact']) &&
                    isset($_REQUEST['username']) && isset($_REQUEST['password'])){
                        
                    
                        $name = $_REQUEST["name"];
                        $lastname = $_REQUEST["lastname"];
                        $email = $_REQUEST["email"];
                        $poste = $_REQUEST["poste"];
                        $contact = $_REQUEST["contact"];
                        
                        $username = $_REQUEST["username"];
                        $password = $_REQUEST["password"];
                        $role = "2";
                    
                        
                        $id = $_REQUEST["id"];
            
                        
                            $u = new ModelUser($name, $lastname, $email, $poste ,$contact ,$username ,$password, $role);	
                            $tab = array(
                                "id" => $id,  
                                
                            "name" =>$name,
                            "lastname" =>$lastname,
                            "email" =>$email,
                            "poste" =>$poste,
                            "contact" =>$contact,    
                            "username" => $username,
                            "password" => $password,
                            "role" => $role,
                        
                            );				
                            $o = ModelUser::select($id);
                            if($o!=null){
                                $u = $o->update($tab, $id);		
                                $pagetitle = "modifié";
                                $view = "gererSuperviseur";
                                header('Location: index.php?controller=admin&action=gerer');
                            }
                        
                            
                    }
                    break;




}







?>