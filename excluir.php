<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaomysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id){
    $usuarioDao->delete($id);
}


header("Location: index.php");
exit;