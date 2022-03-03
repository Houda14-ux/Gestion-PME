<?php include_once('entete.php') ?>
    <table class="table table-striped">
        <thead>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prènom</th>
            <th>Date de naissance</th>
            <th>Département</th>
            <th>Salaire</th>
            <th>Fonction</th>
            <th>Photo</th>
            <th>Modifier</th>
            <th>Suprimer</th>
        </thead>

        <tbody>
            <?php
            $rows = executer();
            while($row = $rows->fetch_object()) {
                //fetch_object retourne object contenant les info recuperé par la requette ligne par ligne .
                //si non elle retourne false si le resultat est vide ou qu'elle  atteind la derniere ligne
                echo "<tr>";
                echo "<td>{$row->Matricule}</td>";
                echo "<td>" . $row->Nom . "</td>";
                echo "<td>{$row->Prenom}</td>";
                echo "<td>{$row->Date}</td>";
                echo "<td>{$row->Departement}</td>";
                echo "<td>{$row->Salaire}</td>";
                echo "<td>{$row->Fonction}</td>";
                echo "<td><img src='{$row->Photo}' style='width:30px;'></td>";
                echo "<td><a href='form.php?matr={$row->Matricule}&action=modifier'>Modifier</a></td>";
                echo "<td><a href='form.php?matr={$row->Matricule}&action=supprimer'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
    
<?php include_once('pied.php') ?>