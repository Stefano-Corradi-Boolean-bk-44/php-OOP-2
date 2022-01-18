<?php

require_once __DIR__ . "/User.php";


class Employee extends User {

  private $level;

  function __construct($_name, $_lastname, $_level)
  {
    // richiamo il costrutture del padre
    // con parent:: richiamo un metodo public o protected della classe madre
    parent::__construct($_name, $_lastname);
    $this->level = $_level;
    $this->discount = 10;
  }

  public function setLevel($_level){
    $this->level = $_level;
  }

  public function setDiscount($_discount){
    // prima faccio i controlli e poi inserisco..... 
    // ... controlli ....
    $this->discount = $_discount + 10;
  }

  public function getLevel(){
    return $this->level;
  }

  // esempio di polimorfismo
  public function getFullName(){
    // eredito il comportamento della classe padre e lo estendo
    $full_name = parent::getFullName();
    return "$full_name livello $this->level";
  }




}

