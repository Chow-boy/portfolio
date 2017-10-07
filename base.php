<?php

      include 'database/db.php';

      if (isset($_POST) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Messages'])) {
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $email = $_POST['Email'];
        $messages = $_POST['Messages'];



              $q = $db->prepare('INSERT INTO users(Nom, Prenom, Email, Messages) VALUES(?, ?, ?, ?)');
              $q->execute(array($nom, $prenom, $email, $messages));
    }







?>
