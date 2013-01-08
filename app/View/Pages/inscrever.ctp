<h3>Inscrição</h3>

<?php echo $this->Form->create('Inscricao', array('action' => 'inscrever')) ?>

<?php echo $this->Form->input('nome', array('label' => '<h5 class="tw_bullet">Nome: ')) ?>
<?php echo $this->Form->input('email', array('label' => '<h5 class="tw_bullet">E-mail: ')) ?>
<?php echo $this->Form->input('telefone', array('label' => '<h5 class="tw_bullet">Telefone: ', 'maxlenght' => '10')) ?>

<?php echo $this->Form->submit('Inscrever') ?>

<?php echo $this->Form->end() ?>
