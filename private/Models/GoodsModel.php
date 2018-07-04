<?php
namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class GoodsModel
{
    private $db;
    private $tablename = 'Goods';
    function __construct()
    {
        $this->db = new DB();
    }
    public function getAllGoods(){
        $sql_str = "SELECT * FROM $this->tablename";
        return $this->db->selectAllFromTable($sql_str);
    }

    public function getComodity ($id){
        $sql = "SELECT *
          FROM $this->tablename
          WHERE id=:id";
        $params = [
            'id'=> $id
        ];
        return $this->db->fetchData($sql, $params);
    }
  }
