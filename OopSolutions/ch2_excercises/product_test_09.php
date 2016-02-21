<?php
// include the class file
require_once '../Ch2/Book_04.php'; 

$book = new Ch2_Book('PHP Object-Oriented Solutions', 300); 

// display the properties
echo '<p>The ' . $book->getProductType() . ' "' . $book->getTitle() . '" has ' . $book->getPageCount() . ' pages</p>';
