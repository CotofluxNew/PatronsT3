<?php
class Tigger {

    private static $instancia = null;

    public function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public static function roar() {
            echo "Grrr!" . PHP_EOL;
    }

    public static function getInstance(){
        if(!isset(self::$instancia )){
            self::$instancia  = new Tigger();
        }
        return self::$instancia ;
    }

}

$instancia1 = Tigger::getInstance();
$instancia2 = Tigger::getInstance();
$instancia3 = Tigger::getInstance();

$instancia1::roar();
$instancia2::roar();
$instancia3::roar();



?>