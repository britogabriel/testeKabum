<?php

include_once 'Connection.php';

class UsuarioController {
    public function cadastrarUsuario($user, $email, $senha) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("INSERT INTO usuario(user, email, senha) VALUES(?, ?, ?)");
        $q->bindParam(1, $user);
        $q->bindParam(2, $email);
        $q->bindParam(3, $senha);
        $q->execute();
    }

    public function getUsuario($user, $senha) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("SELECT * FROM usuario WHERE user = ? AND senha = ?");
        $q->bindParam(1, $user);
        $q->bindParam(2, $senha);
        return $q->execute() and ($q->rowCount() > 0);
    }
}