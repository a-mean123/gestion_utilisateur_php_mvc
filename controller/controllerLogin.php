
<?php

    

$controller = 'login';
  
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 





   
require_once("{$ROOT}{$DS}model{$DS}modelUser.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="login";	
	
switch ($action) {


	case "created":	
		echo'hey';
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']) ){
            $username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
            echo $password;
            echo $username;


            $u = ModelUser::login($username , $password);
            
            $nb=$u->rowCount();


			
if($nb==0)
{
	echo 'errrrr';
}
else
{
	$ligne=$u->fetchObject();
	
	if($ligne->role == 1)
	{
		$_SESSION['role']=1;
		$_SESSION['id']= $ligne->id;

	
		header("location: index.php?controller=admin");
		exit;
	
	}
	
	else
	{
		if($ligne->enable == 1){
			$_SESSION['role']=2;
			$_SESSION['id']= $ligne->id;
			header("location: index.php?controller=admin");
			exit;
		}
		else{
			header("location: index.php?controller=erreur");
			exit;
		}
	
	
		
	}
}
			}	
		break;
		

		
	case "login":
		$pagetitle = "Login";
		$view = "login";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
        case "exit":
			if(!isset($_SESSION)) 
			{ 
				session_start(); 
			} 
			
			
unset($_SESSION['role']);
session_destroy();

            $view = "login";
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
			
			
			case "regist":
				$pagetitle = "Register";
				$view = "register";
				require ("{$ROOT}{$DS}view{$DS}view.php");
				break;
				
			


			case "register":
				if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
					
				
					
					
					$username = $_REQUEST["username"];
					$password = $_REQUEST["password"];
					$role = "1";
				
					
					$id = NULL;
		
		
		
		
		
		
		
		
		
					
						$u = new ModelUser($titre, $description, $image, $prix);	
						$tab = array(
							"id" => $id,    
						"username" => $username,
						"password" => $password,
						"role" => $role,
					
						);				
						$u->insert($tab);
					
						header('Location: index.php?controller=reservation');
					
				}
				break;
		

}







?>