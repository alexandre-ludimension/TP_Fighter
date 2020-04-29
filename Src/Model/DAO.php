<?php

require_once "Model/Brute.php";
require_once "Model/Dwarf.php";
require_once "Model/Mage.php";

class DAO 
{
    private $mFighters = [];
    private static $mDAO = null;

    private function __construct()
    {
        // could be done in a database

        //Declare fighters
        $lBrutus = new Brute("Brutus");
        $lBrutus->setPhoto("images/brutus.gif");
        $lBrutus->init();

        $lMerlin = new Mage("Merlin");
        $lMerlin->setPhoto("images/merlin.png");
        $lMerlin->init();

        $lTyrion = new Dwarf("Tyrion");
        $lTyrion->setPhoto("images/dwarf.jpg");
        $lTyrion->init();

        $this->mFighters[$lBrutus->getName()] = $lBrutus;
        $this->mFighters[$lMerlin->getName()] = $lMerlin;
        $this->mFighters[$lTyrion->getName()] = $lTyrion;
    }

    public static function get(): DAO // singleton pattern
    {
        if (DAO::$mDAO == null)
        {
            DAO::$mDAO = new DAO(); 
        }

        return DAO::$mDAO;
    }

    public function getFighter(string $pName)
    {
        if (array_key_exists($pName, $this->mFighters) )
        {
            return $this->mFighters[$pName];
        }

        return null;
    }
    

}