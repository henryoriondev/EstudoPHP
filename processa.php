<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//   Valida e mostra mensagem
if ($idade >= 18) {
    echo "Olá, $nome! Você tem $idade anos e é maior de idade.";
} else {
    echo "Olá, $nome! Você tem $idade anos e é menor de idade.";
}
?> 
