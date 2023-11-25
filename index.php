<?php

require_once 'banco.php';

$conexao = abrir_conexao('localhost', 'root', '', 'tibia');
create($conexao, "Cyclop", "Terra, Morte", "Gelo, Fogo", "Energia, Sagrado");
read($conexao, 42);
update($conexao, "Neves", 42);
delete($conexao, 43);
fechar_conexao($conexao);

?>