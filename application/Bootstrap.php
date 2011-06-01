<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
  
    
    protected function _initViewHelper()
    {
        
         $view = new Zend_View();
$view->addHelperPath('ZendX/JQuery/View/Helper/', 'ZendX_JQuery_View_Helper');
 
$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
$viewRenderer->setView($view);
Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);

          
        
           
           
    }

}

