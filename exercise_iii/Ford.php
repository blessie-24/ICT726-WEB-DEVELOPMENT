<?php


namespace exercise_iii;

require_once __DIR__ . "/Car.php";

//REM: [EXERCISE_III]
class Ford extends Car {

    private string $country;

    public function __construct(string $country, string $name = "Ford") {
        parent::__construct( $name );
        $this->country = $country;
    }

    /**
     * @inheritDoc exercise_iii\Car
     */
    // public function printDetails(): void {
    //     printf( 
    //         "Car Name: %s - Country: %s\n", 
    //         $this->get_name(), $this->country 
    //     );
    // }
    public function printDetails(): string {
        return sprintf( 
            "%s - Country: %s", 
            parent::printDetails(), $this->country 
        );
    }
}

//REM: This approach ensures that the code only prints or
//REM: run to the terminal when run via CLI and would not 
//REM: be executed to the HTML page when viewed in a 
//REM: browser, hence, avoiding causing ambiguities, errors or in this 
//REM: case avoiding output-duplications. 
//REM: See also; `\php_sapi_name()`
if( \PHP_SAPI === "cli" ) {
    $ford = new Ford( "USA", "Ford" );
    // $ford->printDetails();
    echo \get_class($ford) . ": " . $ford->printDetails() . \PHP_EOL;
}