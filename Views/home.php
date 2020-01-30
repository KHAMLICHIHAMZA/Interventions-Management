<?php

$data= new UsersController();
 $users= $data->getAllUsers();

?>
<div class="container">
    <div class="row my-4">
        <div clas="col-md-12 mx">
        <div class="card">
        <div class="card-body bg-light">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Sexe</th>
      <th scope="col">Grade</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($users as $user):?>
    <tr>
      <th scope="row"><?php echo $user['P_PRENOM'].''.$user['P_PRENOM2']; ?></th>
      <td><?php echo $user['P_NOM']; ?></td>
      <td><?php echo $user['P_SEXE']; ?></td>
      <td><?php echo $user['P_GRADE']; ?></td>
      <td><?php  ?></td>

    </tr>
    <tr>
      <th scope="row"><?php echo $user['P_PRENOM'].''.$user['P_PRENOM2']; ?></th>
      <td><?php echo $user['P_NOM']; ?></td>
      <td><?php echo $user['P_SEXE']; ?></td>
      <td><?php echo $user['P_GRADE']; ?></td>
      <td><?php  ?></td>

    </tr>

    <tr>
      <th scope="row"><?php echo $user['P_PRENOM'].''.$user['P_PRENOM2']; ?></th>
      <td><?php echo $user['P_NOM']; ?></td>
      <td><?php echo $user['P_SEXE']; ?></td>
      <td><?php echo $user['P_GRADE']; ?></td>
      <td><?php  ?></td>

    </tr>
    
    
      <?php endforeach;?>

    
  </tbody>
</table>
</div>
</div>
 </div>
    </div>
</div>