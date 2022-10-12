<?php

namespace models;


class ArticleModel
{
    /**
     * @var \mysqli
     */
    protected $db;

    /**
     * @var string table name
     */
    protected $table='articles';

    /**
     * ArticleModel constructor.
     */
    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->db->connect_error!=0){
            die($this->db->connect_error);// TODO добавить исключение
        }
    }

    /**
     * add new article in storage
     * @param array $article associated array of article params
     * @return bool|\mysqli_result
     */
    public function  add(array $article){
        $sql = "INSERT INTO {$this->table}(title, text) VALUES ('{$article['title']}','{$article['text']}');";
        return $this->db->query($sql);
    }

    public function all(){
        $sql = "SELECT * FROM articles";
        $result = $this->db->query($sql);
        if(!$result){
            //TODO log with select error
            return[];
        }
        //TODO debug
        return $result->fetch_all(MYSQLI_ASSOC);

    }
}