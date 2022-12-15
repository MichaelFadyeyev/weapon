<?php
require_once('weapon.php');


class MachineGun extends Weapon{
        public function __construct()
    {
        parent::__construct('machine gun');
    }

    public function shot()
    {
        return "ta-ta-ta-ta!";
    }
}