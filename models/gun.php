<?php
require_once('weapon.php');


class Gun extends Weapon
{
    public function __construct()
    {
        parent::__construct('gun');
    }

    public function shot()
    {
        return "paf!";
    }
}
