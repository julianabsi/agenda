<?php

class VisitaController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $visitas = new Application_Model_DbTable_Visitas();
        $this->view->visitas = $visitas->fetchAll();
        // action body
    }

    public function addAction()
    {
        
        
       $form = new Application_Form_Visita();
       $form->submit->setLabel('Cadastrar');
       $this->view->form = $form;
        
        if ($this->getRequest()->isPost()) {
            $formData = $this->getRequest()->getPost();
            if ($form->isValid($formData)) {
                $assunto = $form->getValue('assunto');
                $data = $form->getValue('data');
                $empresa = $form->getValue('empresa');
                $endereco = $form->getValue('endereco');
                $contatos = $form->getValue('contatos');
                $fone     = $form->getValue('fone');
                $email    = $form->getValue('email');
                $visitas = new Application_Model_DbTable_Visitas();
                $visitas->addVisita($assunto, $data, $empresa, $endereco, $contatos, $fone, $email);
                
                $this->_helper->redirector('index');
            } else {
                $form->populate($formData);
            }
        }
            
    }
    
    
    public function editAction()
    {
        $form = new Application_Form_Visita();
        $form->submit->setLabel('Save');
        $this->view->form = $form;
        
        if ($this->getRequest()->isPost()){
            $formData = $this->getRequest()->getPost();
            if($form->isValid($formData)){
                $id = (int)$form->getValue('id');
                $assunto = $form->getValue('assunto');
                $data = $form->getValue('data');
                $empresa = $form->getValue('empresa');
                $endereco = $form->getValue('endereco');
                $contatos = $form->getValue('contatos');
                $fone     = $form->getValue('fone');
                $email    = $form->getValue('email');
                
                $visitas = new Application_Model_DbTable_Visitas();
                $visitas->update($id,$assunto, $data, $empresa, $endereco, $contatos, $fone, $email);
                
                $this->_helper->redirector('index');
                
            }else{
                $form->populate($formData);
            }
        }else{
            $id = $this->_getParam('id', 0);
            if ($id > 0){
                $visitas = new Application_Model_DbTable_Visitas();
                $form->populate($visitas->getVisita($id));
            }
                    
        }
    }


    
    public function deleteAction()
    {
        if ($this->getRequest()->isPost()) {
            $del = $this->getRequest()->getPost('del');
            if($del == 'Yes'){
                $id = $this->getRequest()->getPost('id');
                $visitas = new Application_Model_DbTable_Visitas();
                $visitas->deleteVisita($id);
            }
            $this->_helper->redirector('index');
        }else{
            $id = $this->_getParam('id', 0);
            $visitas = new Application_Model_DbTable_Visitas();
            $this->view->visita = $visitas->getVisita($id);
        }
    }
    
    

}





