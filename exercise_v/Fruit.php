<?php

namespace exercise_v;

require_once __DIR__ . "/Orange.php";
require_once __DIR__ . "/Grape.php";
require_once __DIR__ . "/Apple.php";
require_once __DIR__ . "/../util/Webie.php";
use util\Webie;

abstract class Fruit {
    protected string $name;
    public function __construct( string $name ) {
        $this->name = $name;
    }
    public abstract function color(): string;
}

//REM: [HELPER_METHOD]
function printFruitColor( Fruit $fruit, Fruit ...$fruits ) {
    $FORMAT = "%s" . Webie::getNewLine();

    printf( $FORMAT, $fruit->color() );

    $len = \count($fruits);
    for( $i = 0; $i < $len; $i++ )
        printf( $FORMAT, $fruits[$i]->color() );
}

// //REM: [HELPER_METHOD]
// function printFruitColor( bool $isWeb, Fruit $fruit, Fruit ...$fruits ) {
//     $FORMAT = ($isWeb)? nl2br("%s\n") : "%s\n";

//     printf( $FORMAT, $fruit->color() );

//     $len = \count($fruits);
//     for( $i = 0; $i < $len; $i++ )
//         printf( $FORMAT, $fruits[$i]->color() );
// }

//REM: This approach ensures that the code only prints or
//REM: run to the terminal when run via CLI and would not 
//REM: be executed to the HTML page when viewed in a 
//REM: browser, hence, avoiding causing ambiguities, errors or in this 
//REM: case avoiding output-duplications. 
//REM: See also; `\php_sapi_name()`
if( \PHP_SAPI === "cli" ) {
    Webie::$IS_WEB = false;

    $fruits = [ new Apple(), new Orange(), new Grape()];

    printFruitColor( ...$fruits );
}