<?php
namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class To_know_level_engModel
{
    private $db;
    private $tablename1 = 'Questions';
    private $tablename2 = 'Answers';
    function __construct()
    {
        $this->db = new DB();
    }

public function getQuestion($id_question){  //controller/action/get
        $sql_str = "SELECT text_question FROM $this->tablename1
        WHERE id_question=:id_question";
        $params = [
            'id_question'=> $id_question
        ];
        return $this->db->fetchData($sql_str,$params);
    }

   public function getAnswers($id_question){
    $sql_str = "SELECT text_answer FROM $this->tablename2 JOIN $this->tablename1
    ON $this->tablename2.id_question=$this->tablename1.id_question
    WHERE $this->tablename2.id_question=:id_question";
    $params = [
        'id_question'=> $id_question
    ];
    return $this->db->fetchAllData($sql_str,$params);
 }
}





  // class EngTestResults {
  //  private $right = 0;
  //  private $not_right = 0;
  //
  //  public function processing_test_results() {
  //     if ($_POST[answer1] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer2] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer3] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer4] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer5] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer6] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer7] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer8] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer9] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer10] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer11] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer12] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer13] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer14] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer15] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer16] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer17] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer18] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer19] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer20] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer21] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer22] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer23] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer24] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer25] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer26] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer27] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer28] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer29] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer30] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer31] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer32] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer33] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer34] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer35] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer37] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer38] == v3) {$right++;} else {$not_right++;}
  //     if ($_POST[answer39] == v2) {$right++;} else {$not_right++;}
  //     if ($_POST[answer40] == v3) {$right++;} else {$not_right++;}
  // }
  // }
?>
<!-- Ответы 23142 23134 34341 12423 44234 22243 14231 34243 -->
