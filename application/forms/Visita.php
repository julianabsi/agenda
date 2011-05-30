<?php

class Application_Form_Visita extends Zend_Form
{

    public function init()
    {
        
        $this->setName('visita');
        
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');
        
        $assunto = new Zend_Form_Element_Text('assunto');
        $assunto->setLabel('Assunto')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
        
        $data = new Zend_Form_Element_Text('data');
        $data->setLabel('Data')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
            
         $empresa = new Zend_Form_Element_Text('empresa');
         $empresa->setLabel('Empresa')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
            
         $endereco = new Zend_Form_Element_Text('endereco');
         $endereco->setLabel('Endereco')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
            
          $contatos = new Zend_Form_Element_Text('contatos');
          $contatos->setLabel('Contatos')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
            
           $fone = new Zend_Form_Element_Text('fone');
           $fone->setLabel('Fone')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
            
           $email = new Zend_Form_Element_Text('email');
           $email->setLabel('Email')
                ->setRequired(true)
                ->addFilter('StripTags')
                ->addFilter('StringTrim')
                ->addValidator('NotEmpty');
                
                
        
        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton');
        
        $this->addElements(array($id, $assunto, $data, $empresa, $endereco, $contatos, $fone, $email, $submit));
    }


}

