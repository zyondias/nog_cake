<h3>Inscrição</h3>

<?php echo $this->Form->create('Inscricao', array('action' => 'inscrever')) ?>

<div class="form-right">
    <?php echo $this->Form->input('nome', array('class' => 'span5', 'label' => 'Nome: ', 'placeholder' => 'Fernando Nogueira', 'required' => 'required', 'label' => false)) ?>
    <?php echo $this->Form->input('email', array('class' => 'span5', 'label' => 'E-mail: ', 'maxlenght' => '100', 'type' => 'email', 'placeholder' => 'fernando@hotmail.com', 'required' => 'required')) ?>
    <?php echo $this->Form->input('telefone', array('class' => 'span2', 'label' => 'Telefone: ', 'maxlenght' => '10', 'placeholder' => '1199999999')) ?>
    <?php echo $this->Form->input('endereco', array('class' => 'span5', 'label' => 'Endereço: ', 'maxlenght' => '200', 'size' => '400', 'placeholder' => 'Av. João, 20, São Paulo/SP')) ?>
</div>
    
<?php echo $this->Form->submit('Inscrever', array('class' => 'btn btn-success')) ?>

<?php echo $this->Form->end() ?>
