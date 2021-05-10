<div class="container mt-5 ml-5">

    <div class="row col-10 mt-5 ml-auto">
    <div class="col-9">
    <h1 class="lead display-4">Mon Profil:</h1>
    </div>

    </div>



    <div class="row col-10 ml-auto">
    

    <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $u->getName() ?></h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
       
      <?php
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 

            $role=$_SESSION['role'];
            if($role == 1){

                echo"
                <img src='https://images-eu.ssl-images-amazon.com/images/I/31bi6W8o%2BSL.png' class='avatar img-circle img-thumbnail' alt='avatar'>
                ";

            }

            else{
                echo"
                <img src='data:image/jpeg;base64,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' class='avatar img-circle img-thumbnail' alt='avatar'>
                ";

            }
      ?>
      
    
        
      </div></hr><br>

        
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
           

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <?php
$id=$u->getId();

?>
                  <form class="form"  action="index.php?controller=user&action=updated&id=<?php echo $id?>" method="POST" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="name" value="<?php echo $u->getName() ?>" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lastname" value="<?php echo $u->getLastname() ?>" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
              
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email"  value="<?php echo $u->getEmail() ?>" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Poste</h4></label>
                              <input type="text" class="form-control" name="poste"  value="<?php echo $u->getPoste() ?>" id="phone"  >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Contact</h4></label>
                              <input type="text" class="form-control" name="contact"  value="<?php echo $u->getContact() ?>" id="mobile" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Username</h4></label>
                              <input type="email" class="form-control" name="username"  value="<?php echo $u->getUsername() ?>" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password"  value="<?php echo $u->getPassword() ?>" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                 
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update mon profil</button>
                            
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
           
            		
               	
                  <hr>
          
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      


 
    </div>


</div>
