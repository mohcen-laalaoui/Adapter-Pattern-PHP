<?php
/* Adapter pattern */

// Interface defining book-related methods
interface BookIf
{
    public function opening_book();
    public function turn_page();
    public function get_page();
}

// Class representing a person
class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /* Mauvais | use interface to make */
    // Method for a person to read a book, accepting any object that implements the BookIf interface
    public function read(BookIf $book)
    {
        $book->opening_book();
        $book->turn_page();
        $book->get_page();
    }
}

// Class representing a paper book, implementing the BookIf interface
class PaperBook implements BookIf
{
    public $page = 0;

    // Method to open the book
    public function opening_book()
    {
        return $this->page = 1;
    }

    // Method to get the current page
    public function get_page()
    {
        return $this->page;
    }

    // Method to turn the page
    public function turn_page()
    {
        $this->page++;
        echo $this->page;
    }
}
