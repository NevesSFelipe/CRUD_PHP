<?php

    function abrir_conexao($host, $usuario, $senha, $banco) {
        return new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    }

    function fechar_conexao($conexao) {
        $conexao = null;
    }

    function create($conexao, $nome, $fraqueza, $neutro, $forte) {
        $sql = "INSERT INTO monstros (nome, fraquezas, neutro, forte) VALUES (?, ?, ?, ?)";
        $valores = [$nome, $fraqueza, $neutro, $forte];
        $statement = $conexao->prepare($sql);
        $statement->execute($valores);
    }

    function read($conexao, $id) {
        $sql = "SELECT * FROM monstros WHERE id_monstro = ?";
        $valores = [$id];
        $statement = $conexao->prepare($sql);
        $statement->execute($valores);
        print_r($statement->fetchAll(PDO::FETCH_ASSOC));
    }

    function update($conexao, $nome, $id) {
        $sql = "UPDATE monstros SET nome = ? WHERE id_monstro = ?";
        $valores = [$nome, $id];
        $statement = $conexao->prepare($sql);
        $statement->execute($valores);
    }

    function delete($conexao, $id) {
        $sql = "DELETE FROM monstros WHERE id_monstro = ?";
        $valores = [$id];
        $statement = $conexao->prepare($sql);
        $statement->execute($valores);
    }
?>