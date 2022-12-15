<?php

require_once('./models/gun.php');
require_once('./models/machine_gun.php');
require_once('./models/canon.php');

class WeaponManager
{
    private Weapon|array $weapons;
    private Weapon $active_weapon;

    public function __construct()
    {
        $this->weapons[] = new Gun();
        $this->weapons[] = new MachineGun();
        $this->weapons[] = new Canon();
    }

    public function get_weapons()
    {
        return $this->weapons;
    }

    public function get_active_weapon()
    {
        return $this->active_weapon;
    }

    public function find_weapon($name)
    {
        foreach ($this->weapons as $w) {
            if ($w->get_name() === $name) return $w;
        }
        return -1;
    }

    public function find_weapon_index($name){
        $w = $this->find_weapon($name);
        if($w === -1) return -1;
        return array_search($w, $this->weapons);
    }

    public function set_active_weapon($index)
    {
        $this->active_weapon = $this->weapons[$index];
    }
}
