<?php

    class PalestrantesController extends AppController{

        public function index(){
        
            $palestrantes = $this->Palestrante->find('all');
            $this->set('palestrantes', $palestrantes);
            
        }
        
        public function perfil($id){
            $this->Palestrante->id = $id;
            $palestrantes = $this->Palestrante->read();
            $this->set('palestrantes', $palestrantes);
            
        }
        
    }
    
?>