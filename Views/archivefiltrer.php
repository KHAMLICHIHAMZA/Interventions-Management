<div>
    <label for="filtre-select">Filtré par : </label>&nbsp;&nbsp;&nbsp;
    
    <select onchange="javascript:location.href = this.value;">
        <option value="">--Please choose an option--</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=date">Date</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=motif">Motif</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=vehicule">Véhicule</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=numerointervention">Numéro d’intervention</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=adresse">Adresse</option>
        <option value="index.php?c=ArchiveController&m=filtrage&id=redacteur ">Rédacteur</option>
    </select>

</div><br>


            <div> 
                  <table class="table table-hover">
                  <thead>
                    <tr>
                        <th scope="col"><?php if(isset($name)) echo $name; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($filtres as $i):?>
                  <tr onclick="window.location='index.php?c=ArchiveController&m=detailintervention&id=<?php echo $i->Numero_Intervention?>'">
                         <td scope="col"><?php if (isset($i->$nameBD)) echo $i->$nameBD  ?></td>

                    </tr>
                    <?php endforeach;?>

    
                  </tbody>
                  <!--jusque la qui doit changer-->
                </table>
              </div>
