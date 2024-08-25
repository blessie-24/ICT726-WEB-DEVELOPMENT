<?php
namespace exercise_vi;

require_once __DIR__ . "/Library.php";
require_once __DIR__ . "/Member.php";
require_once __DIR__ . "/Book.php";
require_once __DIR__ . "/../util/Webie.php";

use util\Webie;

$book1 = new Book(
    "Head First Object-Oriented Analysis and Design - x",
    "Brett D. McLaughlin - x"
);
$book2 = new Book(
    "Object-Oriented Thought Process, The (Developer's Library) - y", 
    "Matt Weisfeld - y"
);
$book3 = new Book(
    "Clean Code: A Handbook of Agile Software Craftsmanship - z", 
    "Robert C. Martin - z"
);

echo "Book1: " . $book1->getInfo() . Webie::getNewLine();
echo "Book2: " . $book2->getInfo() . Webie::getNewLine();
echo "Book3: " . $book3->getInfo() . Webie::getNewLine();

echo Webie::getNewLine();

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$member1 = new Member("BookWormie", "Out-Of-This-World");
$member2 = new Member("Darcien", "Premium");

$member1->borrowBook($book1);
$member1->borrowBook($book2);
$member2->borrowBook($book3);

echo "Books in Library:" . Webie::getNewLine();
$library->displayBooks();
echo Webie::getNewLine();

$member1->displayBorrowedBooks();
echo Webie::getNewLine();
$member2->displayBorrowedBooks();
?>