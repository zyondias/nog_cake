<h1>Palestrantes</h1>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>

    <?php foreach($palestrantes as $pt){ ?>
    <tr>
        <td><?php echo $pt['Palestrante']['nome']; ?></td>
        <td><?php echo $pt['Palestrante']['descricao']; ?></td>

    </tr>
    <?php }?>
</table>