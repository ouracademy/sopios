<?php namespace App\Copios;

class Day {
    public $date;
    public $slots;

    function __construct($date, array $slots) {
        $this->date = $date;
        $this->slots = $slots;
    }
}