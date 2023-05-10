<?php $render('header'); ?>
<hr>
<form method="POST" action="<?=$base?>/novo">
    <label>
        Nome: <br>
        <input type="text" name="name">
    </label> <br>
    <label>
        Email: <br>
        <input type="email" name="email">
    </label> <br>
    <input type="submit" value="Adicionar">
</form>
<hr>
<?php $render('footer'); ?>