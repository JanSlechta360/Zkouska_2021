<?php
class Book
{
      private $name;
      private $description;
      private $ISBN;
      private $pagesCount;
      private $Author;

      public function __construct(string $name, string $description, string $ISBN, int $pagesCount, Author $Author){
   
        $this->name = $name;
        $this->description = $description;
        $this->ISBN = $ISBN;
        $this->pagesCount = $pagesCount;
        $this->Author = $Author;
    }
      public function summary()  {
        echo "Book:  $this->$name<br>name:$this->$description<br>description:$this->$ISBN<br>ISBN:$this->$pagesCount<br>pagesCount:$this->$Author<br>Author:"; 
        echo "<br>";   
                     
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getISBN() {
        return $this->ISBN;
    }
    public function getPagesCount() {
        return $this->pagesCount;
    }
    public function getAuthor() {
        return $this->Author;
    }
}
?>