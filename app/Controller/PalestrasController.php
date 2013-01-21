<?php

    class PalestrasController extends AppController{
        
        public function index(){
        
            $palestras = $this->Palestra->find('all');
            
            $this->set('palestras', $palestras);
            
        }
        
    }
?>
