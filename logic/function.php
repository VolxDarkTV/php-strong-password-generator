<?php
    $password = $_GET['pwlength'] ?? false;

    // Lunghezza 
    $passwordLenght = "$password";

    // Tutti i possibili caratteri
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";
    // Random String

    $randomString = "";

    // Ciclo For
    function getRandomNum($passwordLenght, $characters, $randomString){

        for ($i = 0; $i < $passwordLenght; $i++){
            $randomString .= $characters[rand(0, (strlen($characters) - 1))];
        }
        echo 'RandomString: ' . $randomString;
        // Ulteriore Randomizzazione delle password, ma prima devo far generare qualcosa alla macchina
        // $passwordGen = str_shuffle($password);
        // echo $passwordGen;
    }
?>