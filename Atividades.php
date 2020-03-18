<?php
    namespace App\Classes;
    class Atividades{
        private $titulo;
        private $descricao;
        private $dataEntrega;
        private $dataRecebimento;
        private $prioridade;
        private $idPessoa;

        public function __construct($tituloArg, $descricaoArg, $dataEntregaArg, $dataRecebimentoArg, $prioridadeArg, $idPessoaArg){
            $this->setTitulo($tituloArg);
            $this->setDescricao($descricaoArg);
            $this->setDataEntrega($dataEntregaArg);
            $this->setDataRecebimento($dataRecebimentoArg);
            $this->setPrioridade($prioridadeArg);
            $this->setIdPessoa($idPessoaArg);
        }
        
        public function getId(){
            return $this->id;
        }
        public function setId($idAtividadeArg){
            $this->id = $idAtividadeArg;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($tituloArg){
            $this->titulo = $tituloArg;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricaoArg){
            $this->descricao = $descricaoArg;
        }

        public function getDataEntrega(){
            return $this->dataEntrega;
        }
        public function setDataEntrega($dataEntregaArg){
            $this->dataEntrega = $dataEntregaArg;
        }

        public function getDataRecebimento(){
            return $this->dataRecebimento;
        }
        public function setDataRecebimento($dataRecebimentoArg){
            $this->dataRecebimento = $dataRecebimentoArg;
        }

        public function getPrioridade(){
            return $this->prioridade;
        }
        public function setPrioridade($prioridadeArg){
            $this->prioridade = $prioridadeArg;
        }

        public function getIdPessoa(){
            return $this->idPessoa;
        }
        public function setIdPessoa($idPessoaArg){
            $this->idPessoa = $idPessoaArg;
        }
    }
?>

