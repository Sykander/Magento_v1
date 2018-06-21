<?php

  class Mage_ProductLogUpdate_Model_Observer
  {

    function logUpdate(Varien_Event_Observer $observer)
    {
      // Retrive the product being updated from the event observer
      $product = $observer->getEvent()->getProduct();
      // Write a new line to product log updates
      $name = $product->getName();
      $sku = $product->getSku();
      Mage::log("{$name} ({$sku}) updated", null, "product_updates.log");
    }
  }
 ?>
