<?php require_once "classes/Author.php";require_once "classes/Book.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zkouska2021</title>
</head>
<body>
     <?php
         $authors[0] = new Author("Stephen", "King", "Stephen Edwin King, some works published under the pseudonym Richard Bachman, is an American horror writer, one of the most productive and most successful readers of today. Many of his books and short stories have been filmed.");
         $authors[1] = new Author("Joanne" , "Rowlingová", "Joanne Rowling written under the name JK Rowling or pseudonym Robert Galbraith, is a British writer best known for her eight-volume book on the witch apprentice Harry Potter, which has won worldwide success including a number of awards and now more than 500 million copies sold.");
         $authors[2] = new Author("Andrzej" , "Sapkowski", "Andrzej Sapkowski is a Polish writer who is considered one of the best fantasy authors. It is very popular not only in Poland, but also in the Czech Republic, Slovakia, Russia, Germany, Portugal, France, Switzerland and has gained enormous popularity in Spain.");
        

         $books[] = new Book("Osvícení", "Jack Torrance gets the position of winter caretaker at the mountain hotel Overlook, where he moves with his whole family. Quite simple work, except for one little thing. The hotel haunts and gradually causes Jack's obsession. However, there is also Jack's five-year-old son Danny, who is endowed with extraordinary telepathic and clairvoyant abilities.", "80-85601-58-3", 404, $authors[0]);
         $books[] = new Book("Misery", "Misery is a novel by the American writer Stephen King from 1987. The film adaptation was created in 1990 and is called Misery Doesn't Want to Die.", "978-80-7593-094-1", 328, $authors[0]);
         $books[] = new Book("Poslední přání", "Newly translated Geralt short stories from the Silver Sword, something from the Eternal Fire and the Sword of Destiny & the complete short story The Voice of Reason, where Geralt explains how it all started.", "80-85951-14-2", 280, $authors[2]);
         $books[] = new Book("Meč osudu", "The main hero of A. Sapkowskis work is the sorcerer Geralt from Rivia. As a hired destroyer of vampires, werewolves and all sorts of dangerous monsters, he understandably masters the combat and magic techniques necessary for his job.", "80-85951-23-1", 344, $authors[2]);
         $books[] = new Book("Harry Potter a Kámen mudrců", "A spectacled boy with a purple scar on his forehead, resembling lightning - this is Harry Potter. The eleven-year-old apprentice of the magical arts was created by the talented writer J. K. Rowling and sent from her island British homeland to the delight of all souls enchanted by fantasy.", "80-00-00788-6", 567, $authors[1]);
     ?>

<h1>Výpis</h1>
    <?php
    $i=1;
    ?>
    <table>
    <tr>
    <td>Pořadí</td>
    <td>Název</td>
    <td>ISBN</td>
    <td>Autor</td>
    <td>Počet stran</td>
    </tr>

    <?php
    foreach ($books as $book) {
    ?>
    <tr>
    
    <td> <?php echo $i++;?></td>
    <td> <?php echo $book->getName(). "<br>";?></td>
    <td> <?php echo  $book->getISBN(). "<br>";?></td>
    <td> <?php echo  $book->getAuthor()->getFirstname() ." ". $book->getAuthor()->getLastname();?></td>
    <td> <?php echo  $book->getPagesCount(). "<br>";?></td>
    </tr><?php } ?>
    </table>

</body>
</html>