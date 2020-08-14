<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaomysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $nome && $email){
    $usuario = $usuarioDao->findById($id);

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    
    $usuarioDao->update($usuario);
    

    header("Location: index.php");
    exit;
} else{
    header("Location: editar.php?id=".$id);
    exit;
}

