<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Minichat</title>
</head>

<body>
    <div class="tout">
    <div class="form">
    <form method="POST"action="minichat_post.php">
        <table>
       <label> <h4>Votre pseudo : </label> <input type="text" class="psd" name="pseudo"></h4>
       
       <label> <h4>Votre message :</label> <input type="text" name="message"> </input></h4> 

        <input id="boutton" type="submit" name="valider" value="VALIDER">
        </table>
    </form>
    </div>
    <div class="message">
<?php
    include('config.php');
    $afficher = $bdd->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 0, 7');

    while($donnees = $afficher->fetch()){
    ?>
    <p><strong><?php echo $donnees['pseudo'] ?></strong> : <?php echo $donnees['message']; ?></p>
    <?php

    }

?>

    </div>
    </div>
</body>
</html>