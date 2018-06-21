<?php

  class Mage_ProductLogSales_Model_Observer {

    public function logUpdate(Varien_Event_Observer $observer){
      Mage::log("You made a sale");
    }

  }

 ?>
