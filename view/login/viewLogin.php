
	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="index.php?controller=login&action=created">
				<img src="assets/img/avatar.svg">
				<h2 class="title">Bienvenue!</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom d'utilisateur</h5>
           		   		<input type="text" name="username" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de passe</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="Connexion">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
