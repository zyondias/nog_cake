<h1><?php echo $palestrantes['Palestrante']['nome']?></h1>
<?php echo $palestrantes['Palestrante']['descricao']?><br />
<a href="<?php echo $palestrantes['Palestrante']['site']; ?>" target="_blank"><?php echo $palestrantes['Palestrante']['site'];?></a>
<br /><br />
<?php echo $this->Html->link('Ver lista de Palestrantes', array('controller' => 'palestrantes', 'action' => 'index')); ?>