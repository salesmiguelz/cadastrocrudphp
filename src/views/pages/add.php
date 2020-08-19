<?php $render('header'); ?>

<h2>Adicionar novo usuário</h2>

<form method="POST" action="<?=$base?>/novo">
<label for="nome">Nome</label>
    <input type="text" name="nome">

    <br>
    <br>

    <label for="email">E-mail</label>
    <input type="email" name="email">

    <br>
    <br>
    
    <input type="submit" value="Adicionar">
</form>