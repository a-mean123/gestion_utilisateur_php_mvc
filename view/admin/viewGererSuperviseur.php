<div class="container mt-5 ml-5">

    <div class="row col-10 mt-5 ml-auto">
    <div class="col-9">
    <h1 class="lead display-4">Gerer les superviseurs</h1>
    </div>
    
    <div class="col-3">
    <a class="btn btn-primary mt-4" href="index.php?controller=admin&action=create">Ajouter un superviseur </a>
    </div>

    </div>



    <div class="row col-10 ml-auto">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">poste</th>
      <th scope="col">contact</th>
      <th scope="col">username</th>
   


      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_p as $c){
        $id = $c->getId();
        $enable = $c->getEnable();

       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getName()."</td>"; 
        echo "<td>".$c->getLastname()."</td>"; 
        echo "<td>".$c->getEmail()."</td>"; 
        echo "<td>".$c->getPoste()."</td>";
        echo "<td>".$c->getContact()."</td>";
        echo "<td>".$c->getUsername()."</td>";   
        echo "
      
        <td> <a class='btn btn-outline-info' href='index.php?controller=admin&action=read&id=$id'> Modifier </a> </td>
        ";

      if ($enable == 1) {
        echo " <td>   <a class='btn btn-success w-100' href='index.php?controller=user&action=block&id=$id&enable=$enable'> blocker </a> </td>";
      }
      else{
        echo " <td>   <a class='btn btn-danger w-100' href='index.php?controller=user&action=block&id=$id&enable=$enable'> deblocker </a> </td>";

      }

       
      
       


        echo "</tr>";
        
    }

    ?>




  </tbody>
</table>
 
    </div>


</div>


