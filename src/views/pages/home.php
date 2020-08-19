<?php $render('header'); ?>

<a href="<?=$base?>/novo">Novo usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id']?>/editar">
                    Editar

                </a>
                
            </td>
            <td>
                <a 
                    href="<?=$base;?>/usuario/<?=$usuario['id']?>/excluir">

                    Excluir
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>