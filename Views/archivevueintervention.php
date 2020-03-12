<main role="main" class="container">
    <div class="starter-template">
        <h1>Affichage d'une intervention</h1>
    </div>

    <br>
    <br />
    <div class="row">
        <h3>
            Intervention Numéro :
            <?php if (isset($intervention->Numero_Intervention)) echo $intervention->Numero_Intervention; ?>
        </h3>
    </div><br>

    <div class="row">
        <label class="col-md-4 control-label">Commune :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Commune)) echo $intervention->Commune; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Adresse :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Adresse)) echo $intervention->Adresse; ?>

        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Type_interv :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Type_interv)) echo $intervention->Type_interv; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Opm :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Opm)) echo $intervention->Opm; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Important :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Important)) echo $intervention->Important; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Date_Heure_Debut :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Date_Heure_Debut)) echo $intervention->Date_Heure_Debut; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label">Date_Heure_Fin :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Date_Heure_Fin)) echo $intervention->Date_Heure_Fin; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label"> Geographique_idGeographique :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Geographique_idGeographique)) echo $intervention->Geographique_idGeographique; ?>
        </div>
    </div>
    <div class="row">
        <label class="col-md-4 control-label"> Statut :</label>
        <div class="col-md-8">
            <?php if (isset($intervention->Statut)) echo $intervention->Statut; ?>
        </div>
    </div>



</main><!-- /.container -->