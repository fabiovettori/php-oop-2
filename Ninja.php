<?php
// Aggiungo una classe ereditata..
class Ninja extends User {
    public $level;

    function __construct($_age, $_level = 0){
        parent:: __construct($_age);
        $this->level = $_level;
    }
}
?>
