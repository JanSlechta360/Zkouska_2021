<?php
class Author
{
  private $firstname;
  private $lastname;
  private $description;
  
  public function __construct(string $firstname, string $lastname, string $description){
   
     $this->firstname = $firstname;
     $this->lastname = $lastname;
     $this->description = $description; 
  }

    public function summary()  {
        echo "Autor:  $this->$firstname<br>firstname:$this->$lastname<br>lastname:$this->$description<br>description:"; 
        echo "<br>";   
  
    }
    public function getFirstname() {
        return $this->firstname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function getDescrption() {
        return $this->description;
    }


}
?>