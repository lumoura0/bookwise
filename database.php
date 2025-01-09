<?php

class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    /*

* Retorna todos os livros do banco de dados
* 

@return array[livro]

*/
    public function livros($pesquisar = '')
    {
        $sql = "select *
            from livros
            where
            usuario = 1
            and (
                titulo like '%$pesquisar%' or autor like '%$pesquisar%' or descricao like '%$pesquisar%')";

        echo $sql . "<br/>";

        $query = $this->db->query("select * from livros");

        $items =  $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function livro($id)
    {
        $sql = "select * from livros";

        $sql .= " where id = " . $id;

        $query = $this->db->query($sql);

        $items =  $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
