<h1>Palestras</h1>
<table class="table table-striped">
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th>Palestrante</th>
        <th>Início</th>
        <th>Fim</th>
    </tr>
    <?php foreach($palestras as $p){ 
        $nome = Inflector::slug(strtolower($p['Palestrante']['nome']), '-');
        ?>
    <tr>
        <td><?php echo $p['Palestra']['nome']; ?></td>
        <td><?php echo $p['Palestra']['descricao']; ?></td>
        <td><?php echo $this->Html->link ($p['Palestrante']['nome'], '/palestrantes/' . $nome . '/' .$p['Palestrante']['id']); $p['Palestrante']['nome']; ?></td>
        
        <td><?php echo $p['Palestra']['inicio']; ?></td>
        <td><?php echo $p['Palestra']['fim']; ?></td>
    </tr>
    <?php }?>
</table>