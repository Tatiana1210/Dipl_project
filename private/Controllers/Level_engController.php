<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\Level_engModel;

class Level_engController extends Controller {

  private $Level_eng;
  function __construct()
  {
        $this->Level_eng = new Level_engModel();
  }


  function indexAction($id_question)  {
    $title = "Узнать свой уровень"; // $title - заголовок страницы
    $questions=$this->Level_eng->getQuestion($id_question);
    var_dump($questions);
    $answers=$this->Level_eng->getAnswers($id_question);
    $view = 'Level_eng_view.php';
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
