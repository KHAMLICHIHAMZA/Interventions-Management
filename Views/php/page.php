<?php
require_once 'C:/wamp64/www/Interventions-Management/Controllers/InterventionsController.php';
if (isset($_GET['name'])) {
    //$value=$_GET['name'];
    $Type_Inters = InterventionsController::getRolebyEngins($_GET['name']);
    //var_dump(print_r($Type_Inters));
    //echo $name = $_GET['name'];
    $i = 1;
    foreach ($Type_Inters as $Type) {
        if ($i % 2 == 1) {
?>
            <div class="row">
            <?php
        }
            ?>
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label> <?php echo $Type ?> </label>
                    <input type="text" class="form-control" name="<?php echo "Role".$i ?>" placeholder="Nom & Prenom">
                </div>
            </div>
            <?php
            $i++;
            if ($i % 2 == 1) {
            ?>
            </div>
<?php
            }
        }
        //}
    }
?>