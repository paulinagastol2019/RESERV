<?php

class Filmy
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    /*pobieranie danych o produkcie za pomocą metody getData*/
    public function getData($table = 'filmy'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

}