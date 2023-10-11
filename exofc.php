<?php
$erreur = "";

if (isset($_POST["soumettre"])) {
    $numerotelephone = $_POST["numerotelephone"];
    $email = $_POST["email"];

    if (empty($numerotelephone)) $erreur .= "<li> veuillez remplir le champs numero de telephone </li>";
    if(empty($email)) $erreur.= "<li> veuillez remplir le champ email</li>";
   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <form method="post" action="">
            <h1>Formulaire de contact</h1>
            <label for="numerotelephone">Entrez votre numéro de téléphone</label>
            <input type="number" name="numerotelephone" placeholder="Entrez votre numéro de téléphone"><br><br>

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Entrez votre email" ><br><br>
            
            <label for="soumettre"></label>
            <input type="submit" name="soumettre">
        </form>
        <?php if (!empty($erreur)) { ?>
            <div><?php echo $erreur ?></div>
        <?php } ?>
    </section>
</body>
</html>
