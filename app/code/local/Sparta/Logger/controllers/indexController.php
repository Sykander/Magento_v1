<?php

  class Sparta_Logger_IndexController extends Mage_Core_Controller_Front_Action
  {

    public function indexAction()
    {
      $this->loadLayout();
      $this->renderLayout();
    }

    public function logAction(){
      echo "logs";
    }
  }


 ?>
