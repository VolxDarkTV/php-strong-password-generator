<?php

    // Ciclo For
    function getRandomNum($passwordLenght, $minLettersOn, $maxLettersOn, $numbersOn, $symbolsOn, $allCharactersGenerationOn){
        
        // Min
        $minLetters = "abcdefghijklmnopqrstuvwxyz";
        // Max
        $maxLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
        // Numbers
        $numbers = "0123456789";
        // Symbols
        $symbols = "!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";

        // ALL
        $allCharactersGeneration = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";

        // Tutti i possibili caratteri
        $characters = "";

        if ($minLettersOn){
            $characters .= $minLetters;
        }
        if ($maxLettersOn){
            $characters .= $maxLetters;
        }
        if ($numbersOn){
            $characters .= $numbers;
        }
        if ($symbolsOn){
            $characters .= $symbols;
        }
        // ALL
        if ($allCharactersGenerationOn){
            $characters .= $allCharactersGeneration;
        }

        if (strlen($characters) < 1){
            return "ERROR!";
        }
        

        // Random String
        $randomString = "";

        // Ciclo While
        $i = 0;
        while ($i < $passwordLenght){
            $randomString .= $characters[rand(0, (strlen($characters) - 1))];

            $i++;
        }
        return $randomString;
        
        // Coclo FOR

        // for ($i = 0; $i < $passwordLenght; $i++){
        //     $randomString .= $characters[rand(0, (strlen($characters) - 1))];
        // }
        // return $randomString;

        // Ulteriore Randomizzazione delle password, ma prima devo far generare qualcosa alla macchina
        // $passwordGen = str_shuffle($password);
        // echo $passwordGen;
    }
?>