<?php

namespace exercise_vi;

require_once __DIR__ . "/../util/Webie.php";
use util\Webie;

class Book {
    private string $title;
    private string $author;

    public function __construct(
        string $title, string $author
    ) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo(): string {
        return "Title: '" . $this->title . "'"
            . ", Author: '" . $this->author . "'";
        // return preg_split("/@[^\\[]*/", $this->__toString())[1];
    }

    public function __toString(): string {
        return sprintf(
            "%s@[title='%s', author='%s']",
            \get_class($this),
            $this->title, $this->author
        );
    }
}

if( \PHP_SAPI === "cli" ) {
    Webie::$IS_WEB = false;
    $bookForstFallJungleBook 
        = new Book("Forst - Fall Jungle Book", "Gorillian Galilie");
    $bookSomethingInvolution 
        = new Book("Something Involution", "Darwinie");
    echo "Book: " . $bookForstFallJungleBook->getInfo() . Webie::getNewLine();
    echo "Book: " . $bookSomethingInvolution->getInfo() . Webie::getNewLine();
}