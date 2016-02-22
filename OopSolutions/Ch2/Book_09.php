<?php
require_once 'Product_07.php';

class Ch2_book extends Ch2_Product {
  protected $_pageCount;

  public function __construct ($title, $pageCount) {
    if (!is_numeric($pageCount) || $pageCount < 1) {
      throw new Exception ('Page count must be a positive number');
    }
    parent::__construct();
    $this->_title = $title;
    $this->_pageCount = (int) $pageCount; // (int) untuk membaca integernya saja, bilangan koma dibelakang akan diabaikan bila ada
    $this->_type = 'book';
  }

  public function display () {
    echo "<p>Book: $this->_title ($this->_pageCount)</p>";
  }

  public function __toString () {
    return $this->_title;
  }
}
