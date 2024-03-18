<?php

class Author {
    private string $lastname;
    private string $firstname;

    private array $books;

    public function __construct(string $lastname, string $firstname) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->books = [];
    }

    public function getPrenom() {
        return $this->firstname;
    }

    public function addBook($newBook){
        $this->books[] = $newBook;
    }

    public function getFName() {
        return $this->firstname;
    }

    public function getLName() {
        return $this->lastname;
    }

    public function getBooks() {
        return $this->books;
    }

    public function setLName($newValue) {
        $this->lastname = $newValue;
    }

    public function setFName($newValue) {
        $this->firstname = $newValue;
    }

    public function resteTable() {
        $this->books = [];
    }

    public function afficherBibliographie(){
        foreach ($this->books as $book) {
            echo $book->getTitle() . " (" . $book->getDate() . ") : " . $book->getPagesNumber() . " pages / " . $book->getPrice() . " €<br>";
        }
    }

    public function getTotalprice(){
        $totalPrice = 0;
        foreach ($this->books as $book) {
            $totalPrice += $book->getPrice();
        }
        return "Le prix total est de $totalPrice €";
    }

    public function __toString() {
        return "<h1>Livres de $this->firstname  $this->lastname</h1>";
    }
}