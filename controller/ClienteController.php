<?php

include_once 'Connection.php';

class ClienteController {
    public function cadastrarCliente($nome, $dataNasc, $cpf, $rg, $telefone) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("INSERT INTO cliente(nome, dataNasc, cpf, rg, telefone) VALUES(?, ?, ?, ?, ?)");
        $q->bindParam(1, $nome);
        $q->bindParam(2, $dataNasc);
        $q->bindParam(3, $cpf);
        $q->bindParam(4, $rg);
        $q->bindParam(5, $telefone);
        $q->execute();
    }

    public function editarCliente($id, $nome, $dataNasc, $cpf, $rg, $telefone) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("UPDATE cliente SET nome = ?, dataNasc = ?, cpf = ?, rg = ?, telefone = ? WHERE id = ?");
        $q->bindParam(1, $nome);
        $q->bindParam(2, $dataNasc);
        $q->bindParam(3, $cpf);
        $q->bindParam(4, $rg);
        $q->bindParam(5, $telefone);
        $q->bindParam(6, $id);
        $q->execute();
    }

    public function excluirCliente($id) {
        $conn = (new Connection())->connect();
        $q = $conn->prepare("DELETE FROM cliente WHERE id = ?");
        $q->bindParam(1, $id);
        $q->execute();
    }

    public function getClientes() {
        $conn = (new Connection())->connect();
        $q = $conn->query("SELECT * FROM cliente");

        $clientes = array();
        while($c = $q->fetch(PDO::FETCH_OBJ)){
            $clientes[] = ['id' => $c->id, 'nome' => $c->nome, 'cpf' => $c->cpf, 'telefone' => $c->telefone];
        }

        return $clientes;
    }
}