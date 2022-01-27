<!-- Prendre toutes les données concernant le minichat -->
<?php
    include('config.php');
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)' );
    // Exécution des messages 
    $req->execute(array(
        'pseudo'=> $_POST['pseudo'],
        'message'=> $_POST['message']
    ));
    // Rediriger l'élement vers la page minichat 
    header('Location: minichat.php');
?>