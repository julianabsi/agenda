<?php

class Application_Model_DbTable_Visitas extends Zend_Db_Table_Abstract
{

    protected $_name = 'visitas';

    
    public function getVisita($id)
    {
       $id = (int)$id;
       $row = $this->fetchRow('id = ' . $id);
       if (!$row){
           throw new Exception("Could not find row $id");
       }
       return $row->toArray(); 
    }




    public function addVisita($assunto, $data, $empresa, $endereco, $contatos, $fone, $email)
    {
        $data = array(
            'assunto'=> $assunto,
            'data'   => $data,
            'empresa'=> $empresa,
            'endereco' => $endereco,
            'contatos' => $contatos,
            'fone'     => $fone,
            'email'    => $email,
            
        );
        $this->insert($data);
    }
    
    public function updateVisita($id, $assunto, $data, $empresa, $endereco, $contato, $fone, $email)
    {
        $data = array(
             'assunto'=> $assunto,
            'data'   => $data,
            'empresa'=> $empresa,
            'endereco' => $endereco,
            'contatos' => $contatos,
            'fone'     => $fone,
            'email'    => $email,
        );
        $this->update($data, 'id = '. (int)$id);
    }
    
    public function deleteVisita($id)
    {
        $this->delete('id =' . (int)$id);
    }

}

