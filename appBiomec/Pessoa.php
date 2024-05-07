<?php
  class Pessoa{
    public $nome;
    public $nascimento;
    public $altura;
    public $peso;
    public static $arrayPessoa = array();

    public function __construct($nome, $nascimento, $altura, $peso) {
      $this->nome = $nome;
      $this->nascimento = $nascimento;
      $this->altura = $altura;
      $this->peso = $peso;
    }


    public static function addPessoa($pessoa) {
      self::$arrayPessoa = $pessoa;
    }
  }
?>