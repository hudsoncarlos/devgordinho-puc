<?php

date_default_timezone_set('America/Sao_Paulo');

class Conexao {

    private $user;
    private $pass;
    private $host;
    private $base;
    private $file;
    public $pdo;

    public function Connect() {
        try {
            $this->user = "u176787183_adm";
            $this->pass = "Biscoito";
            $this->host = "mysql.hostinger.com.br";
            $this->base = "u176787183_bdcup";
            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
            $this->file = "mysql:host=" . $this->host . ";dbname=" . $this->base;
            $this->pdo = new PDO($this->file, $this->user, $this->pass, $parametros);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
            if (!$this->pdo) {
                echo "Erro na conexão";
            }
            return $this->pdo;
        } catch (PDOException $ex) {
            echo "Erro no sistema" . $ex->getMessage();
        }
    }
}
?>