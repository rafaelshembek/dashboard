<?php

class Produtos{

    private $nome;
    private $descricao;
    private $preco;
    private $file;
    

    function __construct($_nome = null, $_descricao = null, $_preco = null)
    {
        $this->setNome($_nome);
        $this->setDescricao($_descricao);
        $this->setPreco($_preco);
    }

   function Image($_file, $_type){
       $this->setFiles($_file, $_type);
    }
   function MoverImage($_file_tmp, $destination_path, $_file_name){
       move_uploaded_file($_file_tmp, $destination_path.$_file_name);
       echo dirname(move_uploaded_file($_file_tmp, $destination_path.$_file_name));
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($_descricao){
        $this->descricao = $_descricao;
    }
    public function getPreco(){
       return number_format($this->preco, 0, ',', '.');
        // return $this->preco;
    }
    public function setPreco($_preco){
        $this->preco = $_preco;
    }
   public function getFiles(){
        return $this->file;
    }
    public function setFiles($_file, $_type){
        switch ($_type) {
            case 'name':
                $this->file = $_file['name'];
                break;
            case 'size':
                $this->file = $_file['size'];
                break;
            case 'type':
                $this->file = $_file['type'];
                break;
            case 'tmp_name':
                $this->file = $_file['tmp_name'];
                break;
            case 'error':
                $this->file = $_file['error'];
                break;
        }
    }
}

?>