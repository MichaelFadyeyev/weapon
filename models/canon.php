<?php
require_once('weapon.php');


class Canon extends Weapon{
        public function __construct()
    {
        parent::__construct('canon');
    }

    public function shot()
    {
        return "ba-bah!";
    }
}