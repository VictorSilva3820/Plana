<?php
    namespace App\ClassesDAO;
    use App\Classes\Pessoa;
    use App\ClassesConect\Conexao; 
    class pessoaDAO{
        public function createPessoa(Pessoa $p){
            $sql = 'INSERT INTO pessoa (nome, sobrenome, email, senha) values (?, ?, ?, ?);';
            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getSobrenome());
            $stmt->bindValue(3, $p->getEmail());
            $stmt->bindValue(4, $p->getSenha());
            $stmt->execute();
        }
        public function read(){
            $sql = 'SELECT * FROM PESSOA';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
            
            if($stmt->rowCount()>0){
                $resultado = $stmt->fetch();
                return $resultado;  
            }

        }
        public function logarPessoa($email, $senha){
            $sql = 'SELECT idPessoa FROM pessoa where email = ? and senha = ?';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();

            if($stmt->rowCount()>0){
                $dadosUser = $stmt->fetch();
                $_SESSION['idUsuario'] = $dadosUser['idPessoa'];
                return true;
            }else{
                return false;
            }
        }
        public function getNomePessoa($idPessoa){
            $sql = 'SELECT nome FROM pessoa where idPessoa = ?';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $idPessoa);
            $stmt->execute(); 

            if($stmt->rowCount()>0){
                $dados = $stmt->fetch();
                $nomeUser = $dados['nome'];
                return $nomeUser;
            }else{
                echo "error";
                return false;
            }
        }
        public function updatePessoa(Pessoa $p, $id){
            $sql = 'UPDATE pessoa SET nome = ?, sobrenome = ?, email = ?, senha = ? where idPessoa = ?;';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getSobrenome());
            $stmt->bindValue(3, $p->getEmail());
            $stmt->bindValue(4, $p->getSenha());
            $stmt->bindValue(5, $id);
            $stmt->execute(); 
        }
        public function updatePessoaImg($img, $id){
            $sql = 'UPDATE pessoa SET caminhoImg = ? where idPessoa = ?;';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $img);
            $stmt->bindValue(2, $id);
            $stmt->execute(); 
        }
        public function selectImgPessoa($id){
            $sql = 'SELECT caminhoImg FROM pessoa where idPessoa = ?';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute(); 

            if($stmt->rowCount()>0){
                $dados = $stmt->fetch();
                $imgUser = $dados['caminhoImg'];
                return $imgUser;
            }else{
                echo "error";
                return false;
            }
        }
    }
?>