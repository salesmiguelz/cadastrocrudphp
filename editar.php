<?php 

require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if ($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios where id = :id");

    $sql->bindValue(':id', $id);
    $sql->execute();


    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }

} else{
    header("Location: index.php");
    exit;
}


?>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $info['id'];?>">

    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome" id="nome" value="<?php echo $info['nome'];?>">
    <br>
    <br>

    <label for="email">Email</label>
    <br>
    <input type="text" name="email" id="email" value="<?php echo $info['email'];?>">
    <br>
    <br>
    
    <input type="submit" value="Salvar">
</form>