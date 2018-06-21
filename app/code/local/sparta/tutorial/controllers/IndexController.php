<?php

class sparta_tutorial_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
      $this->loadLayout();
      $this->renderLayout();
    }
    public function testAction()
    {
        echo "test action";
    }
}

?>
