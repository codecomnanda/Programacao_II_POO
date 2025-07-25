<?php

class Pessoa { //criação de classe chamada Pessoa
    // Atributos
    public $nome;
    public $email;
    public $telefone;
    public $datanascimento;

    // Métodos (funções)
    public function getPessoa() {
    
        echo "<br>Nome: " . $this->nome;
        echo "<br>Email: " . $this->email;
        echo "<br>Telefone: " . $this->telefone;    
        echo "<br>Data de Nascimento: " . $this->datanascimento;
    }
}

?>