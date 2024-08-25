<?php

namespace exercise_iv;

//REM: [IMMUTABLE_CLASS]
//REM: New instance is required to solve a different problem or 
//REM: in this case to calculate the area of the other circle.
final class CircleArea {
    //REM: `readonly` keyword - it means we can only 
    //REM: modify/mutate it once and only if it is 
    //REM: inside of its corresponding class,
    //REM: release in PHP v8.1
    public readonly float $radius;
    public readonly float $area;
    public const PI = 3.14;

    public function __construct(
        float $radius
    ) {
        $this->init( $radius );
    }

    public function __destruct() { }

    private function init( float $radius ) {
        $this->radius = $radius;
        $this->doCalc( $radius );
    }

    private function doCalc( float $radius ): void {
        $this->area = CircleArea::PI * $radius * $radius;
    }

}

//REM: This approach ensures that the code only prints or
//REM: run to the terminal when run via CLI and would not 
//REM: be executed to the HTML page when viewed in a 
//REM: browser, hence, avoiding causing ambiguities, errors or in this 
//REM: case avoiding output-duplications. 
//REM: See also; `\php_sapi_name()`
if( \PHP_SAPI === "cli" ) {
    $r = new CircleArea( 5.0 ); //REM: This instance is an unchangeable object, so a new instance is required to solve a different problem or to calculate the area of the other circle.
    echo $r->area;
}