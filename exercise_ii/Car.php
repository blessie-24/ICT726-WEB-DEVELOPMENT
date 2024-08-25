<?php

namespace exercise_ii;

require_once __DIR__ . "/../util/Webie.php";
use util\Webie;

class Car {
    private string $name;
    private int $year;

    //REM: [EXERCISE_II]
    public function __construct(
        string $name,
        int $year 
    ) {
        $this->name = $name;
        $this->year = $year;
    }

    //REM: [EXERCISE_II]
    public function __destruct() {
        (Webie::$IS_WEB)? "" : printf( ("%s".Webie::getNewLine()), $this ); //REM: echo $this->__toString() . \PHP_EOL;
    }

    public function set_name( string $name ): void {
        $this->name = $name;
    }

    public function set_year( int $year ): void {
        $this->year = $year;
    }

    public function get_name(): string {
        return $this->name;
    }

    public function get_year(): int {
        return $this->year;
    }

    public function __toString(): string {
        return \sprintf( "%s - %d", $this->name, $this->year);
    }
}


//REM: This approach ensures that the code only prints or
//REM: run to the terminal when run via CLI and would not 
//REM: be executed to the HTML page when viewed in a 
//REM: browser, hence, avoiding causing ambiguities, errors or in this 
//REM: case avoiding output-duplications. 
//REM: See also; `\php_sapi_name()`
if ( \PHP_SAPI === "cli" ) {
    $ford = new Car("Ford", 2021);
}

