<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>formulaire de conversion </title>
    <h1>formulaire de conversion de FCFA en EURO</h1>
</head>
<body>
    <form action="" method="POST">
        <label for="">FCFA</label><br>
        <input type="number" name="aicha" required>
        <input type="submit" value="conver">  <br>
        <label for="">EURO <br>
       <?php
    
       ?>     
        </label>
    </form>

    <?php
    function conversion_de_FCFA_en_Euro(){
        if ($_POST['aicha'] <=0) {
           throw new Exception("La valdeur à convertir doit être positive", 1);
           
        }else {
            if($_SERVER["REQUEST_METHOD"]=="POST"){
        
                $aicha=$_POST['aicha']; 
                $resultat= $aicha/600;
                return $resultat;
        
                    }}
                echo conversion_de_FCFA_en_Euro();   
            # code..
        }
    ?>
    
</body>
</html>
