<?php

class InscricoesController extends AppController{
     
    public $scaffold = 'painel';
    
    //Especifica o Model que estou utilizando quando não uso Inflections
    //public $uses = array('Inscricao');
    
    //Action
    
    public function index(){}
    
    public function inscrever(){
        
        $isPost = $this->request->isPost();
        
        //Se é um post recebemos dados do formulário
        if($isPost && !empty($this->request->data)){
            //Tenta salvar os dados
            if($this->Inscricao->save($this->request->data)){
                $this->redirect(array('controller' => 'inscricoes', 'action' => 'obrigado'));
            }
        }
    }
    
    public function obrigado(){}
}
?>
