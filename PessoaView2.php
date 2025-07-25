<?php

require_once 'Classes/pessoa.php'; // Importa a classe Pessoa

// Atribuindo valores para as variáveis
$nome = "Fernanda Guimarães";
$email = "fernandainbox@gmail.com";
$telefone = "11999999999";
$datanascimento = "1990-01-01";

//criar um novo objeto
$Pessoa1 = new Pessoa($nome, $email, $telefone, $datanascimento);

echo"<div><strong>Dados Pessoais</strong>";
$Pessoa1->getPessoa();
echo "</div>";

?>