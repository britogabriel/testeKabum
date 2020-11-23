<?php

include_once 'Connection.php';

class EnderecoController {
    public function cadastrarEndereco($rua, $numero, $bairro, $complemento, $cidade, $estado, $cep) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("INSERT INTO endereco(rua, numero, bairro, complemento, cidade, estado, cep) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $q->bindParam(1, $rua);
        $q->bindParam(2, $numero);
        $q->bindParam(3, $bairro);
        $q->bindParam(4, $complemento);
        $q->bindParam(5, $cidade);
        $q->bindParam(6, $estado);
        $q->bindParam(7, $cep);
        $q->execute();
    }

    public function getEnderecosCliente($idCliente) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("SELECT * FROM endereco WHERE id_cliente = ?");
        $q->bindParam(1, $idCliente);
        return $q->execute();
    }
}