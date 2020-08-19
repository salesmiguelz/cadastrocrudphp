<?php $render('header'); ?>

<h2>Editar usuário</h2>

<form method="POST" action="<?=$base?>/usuario/<?=$usuario['id']?>/editar">
<label for="nome">Nome</label>
    <input type="text" name="nome" value="<?=$usuario['nome']?>">

    <br>
    <br>

    <label for="email">E-mail</label>
    <input type="email" name="email" value="<?=$usuario['email']?>">

    <br>
    <br>
    
    <input type="submit" value="Adicionar">
</form>