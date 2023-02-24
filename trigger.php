<?php
class Tigger {

    private static $instancia = null;
    private static $counter = 0;

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
        self::$counter++;
        return self::$instancia ;
    }

    public static function getCounter(){
        return self::$counter++;
    }

}

$instancia1 = Tigger::getInstance();
$instancia2 = Tigger::getInstance();
$instancia3 = Tigger::getInstance();

echo "<br/>El número de veces que el contador se ha ejecutado es ".Tigger::getCounter()."<br/>" ;

$instancia1::roar();
$instancia2::roar();
$instancia3::roar();



?>