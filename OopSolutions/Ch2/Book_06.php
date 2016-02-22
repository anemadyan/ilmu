<?php
require_once 'Product_05.php';

class Ch2_book extends Ch2_Product {
  protected $_pageCount;

  public function __construct ($title, $pageCount) {
    $this->_title = $title;
    $this->_pageCount = $pageCount;
    $this->_type = 'book';
  }

  public function display () {
    echo "<p>Book: $this->_title ($this->_pageCount)</p>";
  }

  public function __toString () {
    return $this->_title . ', ' . $this->_type;
  }
}
