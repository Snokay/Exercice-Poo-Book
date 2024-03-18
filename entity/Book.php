<?php
class Book{
        private string $title;
        private int $pagesNumber;
        private DateTime $releaseDate;
        private float $price;
        private Author $author;
    
        public function __construct(string $title, int $pagesNumber, string $releaseDate, float $price, Author $author) {
            $this->title = $title;
            $this->pagesNumber = $pagesNumber;
            $this->releaseDate = new DateTime($releaseDate);
            $this->price = $price;
            $this->author = $author;
            $author->addBook($this);
        }

        public function getDate(){
            $date = $this->releaseDate->format('Y');
            return $date;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getPagesNumber(){
            return $this->pagesNumber;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setTitle($newValue){
            $this->title = $newValue;
        }

        public function setPagesNumber($newValue){
            $this->pagesNumber = $newValue;
        }

        public function setAuthor($newValue){
            $this->author = $newValue;
        }

        public function setDate($newValue){
            $this->releaseDate = $newValue;
        }
            
    public function __toString() {
        $year = $this->getDate();
        return "$this->title ($year) : $this->pagesNumber pages / $this->price €<br>";
    }
}

?>