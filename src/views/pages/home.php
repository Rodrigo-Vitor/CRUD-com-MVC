<?php $render('header') ?>
<hr>

<a href="<?= $base ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>

            <td><?= $user['id'] ?></td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="<?=$base?>/usuario/<?=$user['id']?>/editar">[editar]</a>
                <a href="<?=$base?>/usuario/<?=$user['id']?>/excluir">[excluir]</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>

<hr>
<?php $render('footer') ?>