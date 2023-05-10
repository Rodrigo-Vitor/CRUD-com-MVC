<?php $render('header'); ?>
<hr>
<form method="POST" action="<?=$base?>/usuario/<?=$user['id'] ?>/editar">
    <label>
        Nome: <br>
        <input type="text" name="name" value="<?=$user['nome'] ?>">
    </label> <br>
    <label>
        Email: <br>
        <input type="email" name="email" value="<?=$user['email'] ?>">
    </label> <br>
    <input type="submit" value="Editar">
</form>
<hr>
<?php $render('footer'); ?>