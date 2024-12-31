<?php
class conexaoDB{
    protected $location;
    protected $user;
    protected $password;
    protected $database;
    public function __construct()
    {
        $this->location="localhost";
        $this->user="root";
        $this->password="";
        $this->database="php";
    }
    public function conectar(){
        $conexao = mysqli_connect($this->location, $this->user, $this->password,$this->database);
        return $conexao;
    }
}
?>