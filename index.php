<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Employee.php";

echo "Contatore: " . User::getCounter();

$utente = new User('Giusepe', 'Verdi');

var_dump($utente);
echo "Contatore: " . User::getCounter();

$utente->setName('Giuseppe');

if(!$utente->setAge(35)){
  echo "<h1>Inserire un numero</h1>";
  die;
}


var_dump($utente);

$dipendete = new Employee('Ugo', 'de Ughi', 2);
var_dump($dipendete);

echo "Contatore: " . User::getCounter();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 2</title>
</head>
<body>
    <h1>Utente <?php echo $utente->getFullName() ?> </h1>
    <h1>Dipendente <?php echo $dipendete->getFullName() ?> </h1>
  
</body>
</html>