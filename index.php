<?php

require 'config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM usuarios");
$lista = $sql->fetchAll(PDO:: FETCH_ASSOC);

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
            <td><?php echo $usuario['id'] ?></td>
            <td><?php echo $usuario['nome']?></td>
            <td><?php echo $usuario['email']?></td>
            <td>
              <a href="editar.php?id=<?php echo $usuario['id']?>">
                Editar
              </a>

              <a href="excluir.php?id=<?php echo $usuario['id']?>">
                Excluir
              </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

