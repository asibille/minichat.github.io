<?php
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql: host=localhost; dbname=minichat', 'root', '', $pdo_options);

?>