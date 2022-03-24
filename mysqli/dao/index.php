<?php

    require_once("config.php");

    // Carrega um usuário
    // $root = new Usuario();
    // $root -> loadById(3);
    // echo $root;

    // Carrega uma LISTA de usuários
    // $lista = Usuario::getList(); // Chamando o método estatico
    // echo json_encode($lista);

    // Carrega uma LISTA de usuários buscando pelo LOGIN
    // $search = Usuario::search("Vi");
    // echo json_encode($search);

    // Carrega um usuário pelo login e senha
    // $usuario = new Usuario();
    // $usuario -> login("Victoria", "meninaGamer");
    // echo $usuario;

    // INSERT de um usuário novo
    // $aluno = new Usuario("Aluno", "Escola");
    // $aluno -> insert();
    // echo $aluno;

    // Alterar um usuario
    // $usuario = new Usuario();
    // $usuario -> loadById(7);
    // $usuario -> update("Professor", "admin123");
    // echo $usuario;

    $usuario = new Usuario();
    $usuario -> loadById(3);
    $usuario -> delete();
    echo $usuario;

    // SELECT SIMPLES
    // $sql = new Sql();
    // $usuarios = $sql -> select("SELECT * FROM tb_usuarios");
    // echo json_encode($usuarios);

?>