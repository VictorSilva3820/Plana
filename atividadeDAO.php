<?php
    namespace App\ClassesDAO;
    use App\Classes\Atividades;
    use App\Classes\Pessoa;
    use App\ClassesConect\Conexao; 
    class atividadeDAO{
        public function createAtividade(Atividades $a){
            $sql = 'INSERT INTO `atividade` (`titulo`, `descricao`, `dataEntrega`, `dataRecebimento`, `prioridade`, `idPessoa`) VALUES (?,?,?,?,?,?);';

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $a->getTitulo());
            $stmt->bindValue(2, $a->getDescricao());
            $stmt->bindValue(3, $a->getDataEntrega());
            $stmt->bindValue(4, $a->getDataRecebimento());
            $stmt->bindValue(5, $a->getPrioridade());
            $stmt->bindValue(6, $a->getIdPessoa());
            $stmt->execute();
        }
        public function read($idPessoa){
            $sql = 'SELECT * FROM atividade where idPessoa = ?';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $idPessoa);
            $stmt->execute();

            if($stmt->rowCount()>0){
                $dadosAtividade = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                unset($_SESSION['semAtv']);
                return $dadosAtividade;
            }else{
                $_SESSION['semAtv'] = true;
                return $_SESSION['semAtv'];
            }
        }
        public function updateAtividade(Atividade $a){

        }
        public function deleteAtividade(Atividade $a){

        }
    }
?>