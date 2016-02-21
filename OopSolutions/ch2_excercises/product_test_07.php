<?php
// include the class file
require_once '../Ch2/Book_02.php'; 

$book = new Ch2_Book('Book', 'PHP Object-Oriented Solutions', 300); 

// display the $_type property 
echo '<p>"' . $book->getTitle() . '" has ' . $book->getPageCount() . ' pages</p>';
