<label>Prénom :</label>
    <br>
    <input type="text" name="Prénom" placeholder="Prénom" value="" class="form-control">
    <br> <br>
<label>Nom :</label>
    <br>
    <input type="text" name="Nom" placeholder="Nom" value="" class="form-control">
    <br> <br>
<label>Age :</label>
    <br>
    <input type="text" name="Age" placeholder="Age" value="" class="form-control">
    <br> <br>
<label>Mail :</label>
    <br>
    <input type="text" name="Mail" placeholder="Mail" value="" class="form-control">
    <br> <br>
<label>Sexe :</label>
    <br>
    <input type="text" name="Sexe" placeholder="Sexe" value="" class="form-control">
</form>
    <br> <br>

<input type="submit" name="Envoyer" class="btn btn-default" value="Envoyer">
<style>
    table{
        padding:2%;
    }
    td {
        border: 1px solid #333;
    }

    thead,
    tfoot {
        background-color: #333;
        color: #fff;
    }   

</style>

    <br>
    <table >
    <thead>
        <tr><th>Arguments</th><th>Valeurs</th></tr> 
    </thead>
        <?php

            foreach ($_POST as $args => $value) {
                $len=0; 
                for ($i = 0; (isset($value[$i])); $i++) {
                $len++; 
                }
                if ($len > 0) {
                    echo "<tr>";
                    echo "<td>$args</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";

                }
            }
        ?>
        
    </table>



    
<form action="" method="post">
    
    <label for="prenom">Prénom :</label><br>
    <input type="text" name="prenom" id="prenom"><br>
    <br>
    <label for="name">Nom :</label><br>
    <input type="text" name="nom" id="nom"><br>
    <br>
    <label for="age">Age :</label><br>
    <input type="text" name="age" id="age"><br>
    <br>
    <label for="mail">E-mail :</label><br>
    <input type="text" name="mail" id="mail"><br>
    <br>
    <label for="sexe">Sexe :</label><br>
    <input type="text" name="sexe" id="sexe"><br>
    <br>
    
    <input type="submit" value="envoyer"><br>

</form>


<style>
table{
    padding:2%;
}
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}   

</style>

<br>
<table >
<thead>
    <tr><th>Arguments</th><th>Valeurs</th></tr> 
</thead>
    <?php
        // pour chaque POST en argument
        foreach ($_POST as $args => $value) {
            $len=0; 
            for ($i = 0; (isset($value[$i])); $i++) {
            $len++; 
            }
            if ($len > 0) { // si valeur est plus grande que 0
                echo "<tr>"; //nouvelle ligne de tableau
                echo "<td>$args</td>"; //arguments dans une colonne
                echo "<td>$value</td>"; //valeur dans une colonne
                echo "</tr>";

            }
        }
    ?>
    
</table>