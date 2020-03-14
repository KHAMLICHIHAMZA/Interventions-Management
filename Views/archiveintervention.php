<div>
    <label for="filtre-select">Choisir un filtre à effectuer </label>&nbsp;&nbsp;&nbsp;
    
    <select onchange="javascript:location.href = this.value;">
        <option value="">Filtres</option>
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
                        <th scope="col">numero Intervention</th>
                        <th scope="col">Commune</th>
                        <th scope="col">adresse</th>
                        <th scope="col">typeintervention</th>
                        <th scope="col">date heure debut</th>
                        <th scope="col">date heure fin </th>
                        <th scope="col">nom responsable</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php
        $var = '';
        foreach($interventions as $i) {
            $txt = '';

            echo "<tr onclick=\"window.location='index.php?c=ArchiveController&m=detailintervention&id=" . $i->Numero_Intervention . "';\">";

           
            $txt .= "<td>" . $i->Numero_Intervention . "</td>";
            $txt .= "<td>" . $i->Commune . "</td>";
            $txt .= "<td>" . $i->Adresse . "</td>";
            $txt .= "<td>" . $i->Type_interv . "</td>";
            $txt .= "<td>" . $i->Date_Heure_Debut . "</td>";
            $txt .= "<td>" . $i->Date_Heure_Fin . "</td>";

            $txt .= "</tr>";
            echo $txt;
            $var .= "<tr>" . $txt;
        }
        ?>


                 
    
                  </tbody>
                  <!--jusque la qui doit changer-->
                </table>
              </div>
              <form action="index.php?c=ArchiveController&m=export" method="POST">

<input type="hidden" name="var" value="<?php echo $var; ?>">
<input type="submit" value="Exporter">

</form>
