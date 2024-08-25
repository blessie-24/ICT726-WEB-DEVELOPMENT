<?php

namespace exercise_vi;

require_once __DIR__ . "/Book.php";
require_once __DIR__ . "/../util/Webie.php";
use util\Webie;

class Member {
    private string $name;
    private string $membershipType;
    private array $borrowedBooks = [];

    public function __construct($name, $membershipType) {
        $this->name = $name;
        $this->membershipType = $membershipType;
    }

    public function borrowBook(Book $book) {
        $this->borrowedBooks[] = $book;
    }

    public function displayBorrowedBooks() {
        printf( 
            "Borrowed Books by '%s', Membership Type: '%s'%s",
            $this->name,
            $this->membershipType,
            Webie::getNewLine()
        );
        foreach ($this->borrowedBooks as $index => $book) {
            echo "\t> index: " . $index . " | " . $book->getInfo() . Webie::getNewLine();
        }
    }
}

if( \PHP_SAPI === "cli" ) {
    // Webie::$IS_WEB = false;
    $member = new Member( "Gorgie Vank", "Gorillian");
    $member->borrowBook($bookForstFallJungleBook);
    $member->borrowBook($bookSomethingInvolution);
    $member->displayBorrowedBooks();
}