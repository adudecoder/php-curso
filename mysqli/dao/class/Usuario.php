<?php

    class Usuario
    {

        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        // GETTERS AND SETTERS
        public function getIdusuario()
        {
            return $this -> idusuario;
        }

        public function setIdusuario($value)
        {
            $this -> idusuario = $value;
        }

        public function getDeslogin()
        {
            return $this -> deslogin;
        }

        public function setDeslogin($value)
        {
            $this -> deslogin = $value;
        }

        public function getDessenha()
        {
            return $this -> dessenha;
        }

        public function setDessenha($value)
        {
            $this -> dessenha = $value;
        }

        public function getDtcadastro()
        {
            return $this -> dtcadastro;
        }

        public function setDtcadastro($value)
        {
            $this -> dtcadastro = $value;
        }

        // MÉTODOS
        public function loadById($id) { // Método para trazer um Id especifico

            $sql = new Sql();

            $results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

                ":ID" => $id

            ));

            // if (isset($results[0]));
            if (count($results) > 0) {

                // $row = $results[0];

                // $this -> setIdusuario($row['idusuario']);
                // $this -> setDeslogin($row['deslogin']);
                // $this -> setDessenha($row['dessenha']);
                // $this -> setDtcadastro(new DateTime($row['dtcadastro']));

                $this -> setData($results[0]);

            }

        }

        // Carrega uma lista de usuários
        public static function getList() // Método estatico, não precisa instanciar a classe, basta chamar direto
        {

            $sql = new Sql();
            return $sql -> select("SELECT * FROM tb_usuarios ORDER BY deslogin");

        }

        // Carrega uma lista de usuários pelo login
        public static function search($login)
        {

            $sql = new Sql();
            return $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(

                ":SEARCH" => "%".$login."%"

            ));

        }

        // Carrega uma lista de usuários por login e senha
        public function login($login, $password)
        {

            $sql = new Sql();

            $results = $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(

                ":LOGIN" => $login,
                ":PASSWORD" => $password

            ));

            // if (isset($results[0]));
            if (count($results) > 0) {

                $this -> setData($results[0]);

            } else {

                throw new Exception("Login e/ou senha inválidos!");

            }

        }

        public function setData($data)
        {

            $this -> setIdusuario($data['idusuario']);
            $this -> setDeslogin($data['deslogin']);
            $this -> setDessenha($data['dessenha']);
            $this -> setDtcadastro(new DateTime($data['dtcadastro']));

        }

        // Inserir dados no banco de dados
        public function insert()
        {

            $sql = new Sql();

            $results = $sql -> select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array( // MySQLI usamos CALL, Mysql Server usamos EXECUTE

                ":LOGIN" => $this -> getDeslogin(),
                ":PASSWORD" => $this -> getDessenha()

            ));

            if (count($results) > 0) {
                $this -> setData($results[0]);
            }

        }

        // Método para atualizar dados
        public function update($login, $password)
        {

            $this -> setDeslogin($login);
            $this -> setDessenha($password);

            $sql = new Sql();

            $sql -> ExecQuery("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(

                ":LOGIN" => $this -> getDeslogin(),
                ":PASSWORD" => $this -> getDessenha(),
                ":ID" => $this -> getIdusuario()

            ));

        }

        public function delete()
        {

            $sql = new Sql();

            $sql -> ExecQuery("DELETE FROM tb_usuarios WHERE idusuario = :ID", array( // Sem ASTERISCO pq os * se refere a coluna, e vc ta deletando a linha

                ":ID" => $this -> getIdusuario()

            ));

            $this -> setIdusuario(0);
            $this -> setDeslogin("");
            $this -> setDessenha("");
            $this -> setDtcadastro(new DateTime());

        }

        public function __construct($login = "", $password = "") // Se vc chamar blz, se caso não chamar ele vai alimentar com vazio e não vai da erro. Não se tornando obrigadotiro
        {
            
            $this -> setDeslogin($login);
            $this -> setDessenha($password);

        }

        public function __toString()
        {
            
            return json_encode(array(

                "idusuario" => $this -> getIdusuario(),
                "deslogin" => $this -> getDeslogin(),
                "dessenha" => $this -> getDessenha(),
                "dtcadastro" => $this -> getDtcadastro() -> format("d/m/Y H:i")

            ));

        }

    }

?>