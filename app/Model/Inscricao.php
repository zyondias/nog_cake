<?php

class Inscricao extends AppModel{
    
    //Especifica a tabela que estou usando quando não uso Inflections
    //public $useTable = 'inscricoes';
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty', 
            'message' => 'Preencha o Nome!' 
        ),
        'email' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o E-mail!'
            ),
            array(
                'rule' => 'email',
                'message' => 'E-mail inválido!'
            )
        ),
        'telefone' => array(
            array(
                'rule' => 'notEmpty', 
                'message' => 'Preencha o telefone!' 
            ),
            array(
                'rule' => 'numeric', 
                'message' => 'Somente números!'
            )
        ),
        'endereco' => array(
            'rule' => 'notEmpty', 
            'message' => 'Preencha o endereço!' 
        )
    );

}

?>
