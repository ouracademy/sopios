<?php namespace App\Copios;

class Slot {
    public $timePeriod;
    public $name;

    function __construct($timePeriod, $name) {
        $this->timePeriod = $timePeriod;
        $this->name = $name;
    }
}