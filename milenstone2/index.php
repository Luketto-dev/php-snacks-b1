<?php
//Snack 2
//Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
//che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
//Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


$name = key_exists("name", $_GET) ? $_GET["name"] : '';
$mail = key_exists("mail", $_GET) ? $_GET["mail"] : '';
$age = key_exists("age", $_GET) ? $_GET["age"] : '';

echo "Inserisci come parametri Get name, mail e age per verificare se puoi accedere";
echo "<br>";


$loginSuccessful = true;
$posChiocciola = strpos($mail, "@");
$posPunto = strpos($mail, ".");



if (strlen($name) <= 3) {
    $loginSuccessful = false;
};

if (!$posChiocciola || !$posPunto) {
    $loginSuccessful = false;
};

if (!is_numeric($age)) {
    $loginSuccessful = false;
};

if ($loginSuccessful == false) {
    echo "Accesso negato " . $name ." ". $mail ." ". $age;
}else{
    echo "Accesso riuscito " . $name ." ". $mail ." ". $age;
}

var_dump($loginSuccessful)




?>