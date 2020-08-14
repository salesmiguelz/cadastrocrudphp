<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaomysql($pdo);

$lista = $usuarioDao->findALl();

?>

<a href="adicionar.php">Adicionar usuário</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($lista as $usuario): ?>
        <tr>
            <td><?php echo $usuario->getId(); ?></td>
            <td><?php echo $usuario->getNome();?></td>
            <td><?php echo $usuario->getEmail();?></td>
            <td>
              <a href="editar.php?id=<?php echo $usuario->getId();?>">
                Editar
              </a>

              <a href="excluir.php?id=<?php echo $usuario->getId();?>">
                Excluir
              </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

