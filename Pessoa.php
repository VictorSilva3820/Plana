<?php
    namespace App\Classes;
    use App\ClassesConect\Conexao; 
    class Pessoa{
        private $idPessoa;
        private $nome;
        private $sobrenome; 
        private $email;
        private $senha;

        public function __construct($nomeArg, $sobrenomeArg, $emailArg, $senhaArg){
            $this->setNome($nomeArg);
            $this->setSobrenome($sobrenomeArg);
            $this->setEmail($emailArg);
            $this->setSenha($senhaArg);
        }
        public function getId(){
            return $this->idPessoa;
        }
        public function setId($idPessoaArg){
            $this->idPessoa = $idPessoaArg;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nomeArg){
            $this->nome = $nomeArg;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenomeArg){
            $this->sobrenome = $sobrenomeArg;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($emailArg){
            $this->email = $emailArg;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senhaArg){
            $this->senha = $senhaArg;
        }
    }
?>