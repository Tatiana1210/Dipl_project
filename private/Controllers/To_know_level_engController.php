<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\To_know_level_engModel;

class To_know_level_engController extends Controller {

  private $to_know_level_eng;
  function __construct()
  {
        $this->to_know_level_eng = new To_know_level_engModel();
  }


  function indexAction($id_question)  {
    $title = "Узнать свой уровень"; // $title - заголовок страницы
    $questions=$this->to_know_level_eng->getQuestion($id_question);
    var_dump($questions);
    $answers=$this->to_know_level_eng->getAnswers($id_question);
    $view = 'to_know_level_eng_view.php';
    $this->generateResponse($view,[
      'title'=> $title,
      'id_question'=>$id_question,
      'questions'=>$questions,
      'answers'=>$answers
    ]);
  }

    function test_resultAction()  {
      $title = "Узнать свой уровень"; // $title - заголовок страницы
      $view = 'test_result.php';
      $this->generateResponse($view,[
        'title'=> $title,
      ]);
    }
  }
