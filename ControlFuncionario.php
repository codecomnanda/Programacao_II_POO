<?php

require_once 'Classes/funcionario.php'; // Importa a classe Pessoa

// Atribuindo valores para as variáveis
$Func = new Funcionario();
$Func->setNome("João da Silva");    
$Func->setEmail("joao@email.com.br");
$Func->setSalario(1500.00); 
var_dump($Func);

?>