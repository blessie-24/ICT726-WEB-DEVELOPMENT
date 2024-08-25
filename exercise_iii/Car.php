<?php

namespace exercise_iii;

class Car {

    private string $name;
    private int $year;

    //REM: [EXERCISE_III]
    public function __construct( string $name, int $year = 0 ) {
        $this->name = $name;
        $this->year = $year;
    }

    public function __destruct() {

    }

    public function set_name( $name ): void {
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

    //REM: [EXERCISE_III]
    // public function printDetails(): void {
    //     print("Car Name: $this->name\n");
    // }
    public function printDetails(): string {
        return \sprintf("Car Name: $this->name");
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
    $ford = new Car("Ford");
    //$ford->printDetails();
    echo \get_class($ford) . ": " . $ford->printDetails() . \PHP_EOL;
}