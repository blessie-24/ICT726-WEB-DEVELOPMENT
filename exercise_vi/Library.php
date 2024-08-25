<?php

namespace exercise_vi;

require_once "Book.php";
require_once __DIR__ . "/../util/Webie.php";
use util\Webie;

class Library {
    private array $books = [];

    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    public function displayBooks(): void {
        echo "Library contain-book(s):" . Webie::getNewLine();
        foreach ($this->books as $index => $book) {
            echo "\t> index: " . $index . " | " . $book->getInfo() . Webie::getNewLine();
        }
    }
}

if( \PHP_SAPI === "cli" ) {
    // Webie::$IS_WEB = false;
    $lib = new Library();
    $lib->addBook( $bookForstFallJungleBook );
    $lib->addBook( $bookSomethingInvolution );
    $lib->displayBooks();
}