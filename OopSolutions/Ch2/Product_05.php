<?php 
abstract class Ch2_Product {
  // properties defined here
  protected $_type;
  protected $_title;  

  // konstruktor dihapus, gak guna

  // methods defined here
  public function getProductType () {
    return $this->_type;
  }

  public function setProductType ($type) {
    $this->_type = $type;
  }

  public function getTitle () {
    return $this->_title;
  }
  abstract public function display ();
}
