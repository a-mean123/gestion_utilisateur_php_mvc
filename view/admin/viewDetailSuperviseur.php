<div class="container mt-5 ml-5">

    <div class="row col-10 mt-5 ml-auto">
    <div class="col-9">
    <h1 class="lead display-4">Modifier superviseurs</h1>
    </div>

    </div>



    <div class="row col-10 ml-auto">
    
<?php
$id=$u->getId();

?>

    <form class="w-100" action="index.php?controller=user&action=updated&id=<?php echo $id?>" method="POST">


      

            <input type="text" name="name" value="<?php echo $u->getName() ?>" class="w-100 form-control m-1">

            <input type="text" name="lastname" value="<?php echo $u->getLastname() ?>" class="form-control m-1">
            <input type="text" name="email" value="<?php echo $u->getEmail() ?>" class="form-control m-1">
            <input type="text" name="poste" value="<?php echo $u->getPoste() ?>" class="form-control m-1">



     
        <input type="text" name="contact" value="<?php echo $u->getContact() ?>" class="form-control m-1">

        <input type="text" name="username" value="<?php echo $u->getUsername() ?>" class="form-control m-1">
        <input type="password" name="password" value="<?php echo $u->getPassword() ?>" class="form-control m-1">
        <input type="submit" name="submit" value="update" class="form-control btn btn-primary  m-1">




    </form>




 
    </div>


</div>


