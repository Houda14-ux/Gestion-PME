<?php
include_once('connection.php');
$Matricule = "";
$Nom = '';
$Prenom = '';
$date = '';
$Departement = '';
$Salaire = '';
$Fonction = '';
if( isset( $_GET['action'] ) && $_GET['action'] == 'modifier' && isset( $_GET['matr'] ) ){
    // si l'action existe et si sa valeur egale a modifier et que la matricule existe
    $info =  afficher_info($_GET['matr']);
    if( empty($info) ){
        exit('Matricule introuvable ');
    }
    else{
        $Matricule = $info->Matricule;
        $Nom = $info->Nom;
        $Prenom = $info->Prenom;
        $date = $info->Date;
        $Departement = $info->Departement;
        $Salaire = $info->Salaire;
        $Fonction = $info->Fonction;
    }
}
else if( isset( $_GET['action'] ) && $_GET['action'] == 'supprimer' && isset( $_GET['matr'] ) ){
    supprimer();
}

if( isset($_POST['action']) && $_POST['action'] == 'modifier' ){
    modifier();
}
else if( isset($_POST['action']) && $_POST['action'] == 'enregistrer' ){
    ajouter();
}
?>
<?php include_once('entete.php') ?>




<form class="form-employer" action="" method="post" enctype="multipart/form-data">
    <?php 
        //$action = isset($_GET['action'])?$_GET['action']:'enregistrer';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $lecture_seul = 'readonly';
        }
        else{
            $action = 'enregistrer';
            $lecture_seul = '';
        }
    ?>
    <input type="hidden" name="action" value="<?php echo $action; ?>">
<table class="table table-striped">
        <tr><th>Matricule</th><td><input name="Matricule" value="<?php echo $Matricule; ?>" <?php echo $lecture_seul; ?> ></td></tr>
        <tr><th>Nom</th><td><input name="Nom" value="<?php echo $Nom; ?>" ></td></tr>
        <tr><th>Prènom</th><td><input name="Prenom" value="<?php echo $Prenom; ?>" ></td></tr>
        <tr><th>Date de naissance</th><td><input name="date" value="<?php echo $date; ?>" type="date" ></td></tr>
        <tr><th>Département</th><td><input name="Departement" value="<?php echo $Departement; ?>" ></td></tr>
        <tr><th>Salaire</th><td><input name="Salaire" value="<?php echo $Salaire; ?>" type="number" step="0.01" ></td></tr>
        <tr><th>Fonction</th><td><input name="Fonction" value="<?php echo $Fonction; ?>" ></td></tr>
        <tr><th>Photo</th><td><input name="Photo" type="file" ></td></tr>
        <tr><th></th><td><input type="submit" class="btn btn-success" value="valider" ></td></tr>
</table>    
</form>
<?php include_once('pied.php') ?>
<!-- <?php include_once('style.css') ?> -->