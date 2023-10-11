<?php
session_start();
$score=0;
$erreur="";
if (isset($_POST["soumettre"])) {
    
        $nom=$_POST["nom"]; 
        $prenom=$_POST["Prénom"];
        $adresse=$_POST["adresse"];
        $poids=$_POST["poids"];
        $telephone=$_POST["telephone"];
        $diarrhee=$_POST["diarrhee"];
        $temperature=$_POST["temperature"];
        $maux_de_tete=$_POST["maux_de_tete"];
        $age=$_POST["age"];
        $perte_odorat=$_POST["perte_odorat"];
        $genre=$_POST["genre"];
        $score=0;

  

        if(empty($nom)) $erreur= "le champ nom ne doit pas etre vide ";



        if ($diarrhee == "Oui" ) {
        $score+=20;

        }
        if ($temperature=="39-42") {
            $score+=20;
        
        }
        if ($maux_de_tete=="Oui") {
            $score+=30;
        
        }
        if ($perte_odorat=="oui") {
            $score+=30;

        }
        $ndiaye="";
        if ($score>=80) {
            $ndiaye= "vous avez le covid ";
            }
            elseif ($score>=50 ) {
            $ndiaye= "vous etes succeptible d'avoir le covide";
            }
            else {
                $ndiaye= "vous etes bien portant(e)";

        $_SESSION["nom"]=$nom;
        $_SESSION["Prénom"]=$prenom;
        $_SESSION["adresse"]=$adresse;
        $_SESSION["poids"]=$poids;
        $_SESSION["telephone"]=$telephone;
        $_SESSION["diarrhee"]=$diarrhee;
        $_SESSION["temperature"]=$temperature;
        $_SESSION["maux_de_tete"]=$maux_de_tete;
        $_SESSION["age"]=$age;
        $_SESSION["perte_odorat"]=$perte_odorat;
        $_SESSION["genre"]=$genre;
        $_SESSION["score"]=$score;

        }
        // Créez un tableau associatif pour stocker les données du patient

        $stock = array(
            "nom" => $nom,
            "Prénom" => $prenom,
            "adresse" => $adresse,
            "poids" => $poids,
            "telephone" => $telephone,
            "diarrhee" => $diarrhee,
            "temperature" => $temperature,
            "maux_de_tete" => $maux_de_tete,
            "age" => $age,
            "perte_odorat" => $perte_odorat,
            "genre" => $genre,
            "score" => $score,
            "resultat"=>$ndiaye
        );


        // Vérifiez si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

            
            // Ajoutez le tableau au tableau "historique" dans la session
            $_SESSION["historique"][] = $stock;
        }

        // Affichez les données stockées dans la session
        if (isset($_SESSION["historique"]) && !empty($_SESSION["historique"])) {
            echo "<h1>Historique des patients</h1>";
            foreach ($_SESSION["historique"] as $patient) {
                echo "<h2>Patient :</h2>";
                echo "<ul>";
                foreach ($patient as $key => $value) {
                    echo "<li><strong>$key :</strong> $value</li>";
                }
                echo "</ul>";
            }
        } else {
            echo "<h1>Aucune donnée disponible.</h1>";
        }
        }


?>

// exit();



<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'information sur le patient</title>
</head>

<body classe="body">
<fieldset>
    <div>
     <form method="post" action=""> 
     <h1>test covid en ligne</h1>
        <p>
        <label for="nom">saisissez votre Nom :</label>
        <input type="text" name="nom" placeholder="entrez votre nom" ><br><br>

        <label for="Prénom"> Prénom :</label>
        <input type="text" name="Prénom"  placeholder="entrez votre prenom" ><br><br>

        <label for="adresse"> adresse :</label>
        <input type="text" name="adresse"  placeholder="entrez votre adresse" required><br><br>

        <label for="poids"> poids :</label>
        <input type="text" name="poids" id="poids"  placeholder="entrez votre poids" required><br><br>

        <label for="telephone">numéro de téléphone :</label>
        <input type="number" name="telephone" id="telephone"  placeholder="entrez votre numero de telephone" required><br><br>

        <h3>Veuillez répondre aux questions suivantes :</h3>

        <label for="diarrhee">Est-ce que vous avez de la diarrhée :</label>
        <input type="radio" name="diarrhee" value="Oui" required> OUI
        <input type="radio" name="diarrhee" value="Non" required> NON<br><br>

        <label for="temperature">Votre température corporelle (en degrés Celsius) :</label>
        <input type="radio" name="temperature" value="37" required>37<br><br>
        <input type="radio" name="temperature" value="39-42" required>39-42<br><br>
 

        <label for="maux_de_tete">Avez-vous de maux de tête :</label>
        <input type="radio" name="maux_de_tete" value="Oui" required> OUI
        <input type="radio" name= "maux_de_tete" value="non" required>NON<br><br>

        <label for="age"> votre tranche d'age:</label>
    <input type="radio" name="age" value="10-15" required> 10-15 <br><br>
    <input type="radio" name="age" value="16-30" required> 16-30 <br><br>
    <input type="radio" name="age" value="31-60" required> 31-60 <br><br>
    <input type="radio" name="age" value="61-100" required> 61-100 <br><br>


        <label for="perte_odorat">Perte de l'odorat :</label>
        <input type="radio"name="perte_odorat" value= "oui" required> OUI
        <input type="radio" name="perte_odorat" value="non" required>NON <br><br>


        <label for="commentaires">information supplémentaires :</label><br>
        <textarea name="commentaires" rows="4" cols="50"></textarea><br><br>

        <label for="GENRE">genre:</label>
        <select name="genre" id="" class= "select"> genre
            <option value="HOMME">HOMME</option>
            <option value="FEMME">FEMME</option>
        </select><br><br>

        <input type="submit" name="soumettre" value="Soumettre" class= "submit">
        </p>
        </fieldset>
    </form>
    <div><?php echo $erreur ?></div>
    </div>


</body>

</html>
