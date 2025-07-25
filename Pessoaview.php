<?php

require_once 'Classes/pessoa.php'; // Importa a classe Pessoa

//criar um novo objeto
$Pessoa1 = new Pessoa();

// Atribuindo valores para as variáveis
$Pessoa1 -> nome = "Fernanda Guimarães";
$Pessoa1 -> email = "fernandainbox@gmail.com";
$Pessoa1 -> telefone = "11999999999";
$Pessoa1 -> datanascimento = "1990-01-01";

echo"<div><strong>Dados Pessoais</strong>";
$Pessoa1->getPessoa();
echo "</div>";

?>