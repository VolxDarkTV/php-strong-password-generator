<?php

    // Ciclo For
    function getRandomNum($passwordLenght){
    
        // Tutti i possibili caratteri
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";

        // Random String
        $randomString = "";

        // Coclo FOR
        for ($i = 0; $i < $passwordLenght; $i++){
            $randomString .= $characters[rand(0, (strlen($characters) - 1))];
        }
        return $randomString;
        // Ulteriore Randomizzazione delle password, ma prima devo far generare qualcosa alla macchina
        // $passwordGen = str_shuffle($password);
        // echo $passwordGen;
    }
?>