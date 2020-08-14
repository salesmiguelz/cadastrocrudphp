<?php 

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaomysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if ($id){

   $usuario = $usuarioDao->findById($id);

} 

if($usuario === false){
    header("Location: index.php");
    exit;
}


?>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario->getId();?>">

    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome" id="nome" value="<?php echo $usuario->getNome();?>">
    <br>
    <br>

    <label for="email">Email</label>
    <br>
    <input type="text" name="email" id="email" value="<?php echo $usuario->getEmail();?>">
    <br>
    <br>
    
    <input type="submit" value="Salvar">
</form>