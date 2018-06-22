<?php
  // app/code/local/sparta/Recentproducts/Model/Recentproducts.php
  class Sparta_Recentproducts_Model_Recentproducts extends Mage_Core_Model_Abstract {
    public function getRecentProducts() {
      $products = Mage::getModel("catalog/product")->getCollection()->addAttributeToSelect('*')->setOrder('entity_id', 'DESC')->setPageSize(5);
      return $products;
    }
  }
 ?>
