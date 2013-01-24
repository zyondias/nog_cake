<?php

class UsuariosController extends AppController{
    
    public $scaffold = 'painel';
    
    public function painel_login()
    {

            //$this->layout = 'login';

            if ($this->request->isPost())
            {
                    if ($this->Auth->login())
                    {
                            $this->redirect($this->Auth->redirect());
                    }
                    else
                    {
                            $this->Session->setFlash('Dados incorretos!', 'default', array(), 'auth');
                    }	
            }

    }
    
    public function painel_logout(){
        
        $this->redirect($this->Auth->logout());
    }
}

?>
