<?php

namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class TeachersModel
{
    private $db;
    private $tablename = 'Teachers';
    function __construct()
    {
        $this->db = new DB();
    }
    public function getAllTeachers(){
        $sql_str = "SELECT * FROM $this->tablename";
        return $this->db->selectAllFromTable($sql_str);
    }
}
