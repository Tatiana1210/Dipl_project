<?php
namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class ReviewsModel

{
    private $db;
    private $tablename = 'Reviews';
    function __construct()
    {
        $this->db = new DB();
    }

    public function getAllReviews(){
        $sql_str = "SELECT * FROM $this->tablename";
        return $this->db->selectAllFromTable($sql_str);
    }

    public function addReview ($review_data){
        $sql = "INSERT INTO Reviews (full_name, review_text,date_time)
           VALUES (:full_name, :review_text, :date_time)";
        return $this->db->executePrepareSql($sql, $review_data);
    }
}

// CREATE TABLE IF NOT EXISTS Reviews (
// id_review INT AUTO_INCREMENT PRIMARY KEY,
// full_name VARCHAR(200) NOT NULL,
// rating INT NOT NULL,
// review_text VARCHAR (650) NOT NULL)
