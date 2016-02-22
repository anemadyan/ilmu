<?php
// include the class file
require_once '../Ch2/Book_05.php'; 
require_once '../Ch2/DVD_03.php';

$book = new Ch2_Book('PHP Object-Oriented Solutions', 300); 
$movie = new Ch2_DVD('Atonement', '2 hr 10 min');

$book->display();
$movie->display();


// tak tambahi dew, njajal ilmu anyar
echo 'class : ' . get_class($book) . '<br>';
echo 'parent : ' . get_parent_class($book) . '<br>';
echo 'class : ' . get_class($movie) . '<br>';
echo 'parent : ' . get_parent_class($movie) . '<br>';
