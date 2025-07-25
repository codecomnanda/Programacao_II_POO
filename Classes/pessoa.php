<?php

class Pessoa { //criação de classe chamada Pessoa
    // Atributos
    public $nome;
    public $email;
    public $telefone;
    public $datanascimento;

    //construtor
    function __construct($nome, $email, $telefone, $datadenascimento) {

        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->datanascimento = $datadenascimento;
    }

    // Métodos (funções)
    public function getPessoa() {
    
        echo "<br>Nome: " . $this->nome;
        echo "<br>Email: " . $this->email;
        echo "<br>Telefone: " . $this->telefone;    
        echo "<br>Data de Nascimento: " . $this->datanascimento;
    }
    // Método destrutor
    function __destruct() {
        // Aqui você pode liberar recursos ou realizar outras ações quando o objeto for destruído
        echo "<br>Objeto Finalizado.";
    }
}

?>