<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
  
    
    protected function _initViewHelper()
    {
        
          $view = new Zend_View();
          $view->doctype('XHTML1_STRICT');
          $view->addHelperPath("ZendX/JQuery/View/Helper", "ZendX_JQuery_View_Helper");
          $view->jQuery()->addStylesheet('/js/jquery/css/ui-lightness/jquery-ui-1.7.2.custom.css')
            ->setLocalPath('public/js/JQuery.js');
            //->setUiLocalPath('/js/jquery/js/jquery-ui-1.7.2.custom.min.js');
          $view->jQuery()->enable()->uiEnable();
          $viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
          $viewRenderer->setView($view);
           Zend_Controller_Action_HelperBroker::addHelper($viewRenderer); 

        
    }

}

