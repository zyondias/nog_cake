<div id="templatemo_menu">
    <ul>
      <li><?php echo $this->Html->link('O Evento', array('controller' => 'pages', 'action' => 'display', 'evento')); ?></li>
      <li><?php echo $this->Html->link('Como Chegar', array('controller' => 'pages', 'action' => 'display', 'comochegar')); ?></li>
      <li><?php echo $this->Html->link('Inscrição', array('controller' => 'inscricoes', 'action' => 'inscrever')); ?></li>
      <li><?php echo $this->Html->link('Palestras', array('controller' => 'palestras', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('Palestrantes', array('controller' => 'palestrantes', 'action' => 'index')); ?></li>
      <li><?php echo $this->Html->link('Painel', array('controller' => 'usuarios', 'action' => 'index', 'painel' => true)); ?></li>
    </ul>
</div> <!-- end of templatemo_menu -->
