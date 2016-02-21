<?php
// include the class file
require_once '../Ch2/Book_03.php'; 

$book = new Ch2_Book('book', 'PHP Object-Oriented Solutions', 300); 

// display the properties
echo '<p>"' . $book->getTitle() . '" has ' . $book->getPageCount() . ' pages</p>';
