<?php
//QuickPasswordGenerator//
//Author: Przemyslaw Idzczak <https://github.com/idzczakp>//
//License: GNU GPL v3.0 <https://github.com/idzczakp/QuickPasswordGeneratorPHP/blob/master/LICENSE>//

function GenerateQuickPass(){
    $input = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,./!@#$%^&*()_+=-'; //characters that will be used to generate password
    $passwordLength = strlen($input); //getting an lenght of the input variable
    $length = 15; //declaring the lenght of generated password
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $passwordLength);
            $password[] = $input[$n];
        }
    return implode($password);
}
?>

