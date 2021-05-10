<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                            <div class="sb-sidenav-menu-heading">Coeur</div>
                            <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            

                            <?php
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 

            $role=$_SESSION['role'];
            if($role == 1){


                         echo "
                         <a class='nav-link collapsed' href='index.php?controller=admin&action=gerer'>
                         <div class='fas fa-fw fa-cog'><i class='fas fa-columns'></i></div>
                            Gérer les superviseurs
                                                 </a>
                         ";



            }

            ?>

                    <a class="nav-link collapsed" href="index.php?controller=admin&action=profil">
                            <div class="fas fa-fw fa-cog"><i class="fas fa-columns"></i></div>
                               Mon Profil
                                                    </a>

                         
                          
                </nav>
            </div>