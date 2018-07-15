<?php
 namespace Tatiana\Polyglot\Controllers;

use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\TestLevel_engModel;

class TestLevelController extends Controller
{
    private $testLevel_eng;
    function __construct()
    {
        $this->testLevel_eng = new TestLevel_engModel();
    }
    function indexAction()  {
        $title = "Узнать свой уровень"; // $title - заголовок страницы
        $view = 'test_level.php';
        $this->generateResponse($view,[
            'title'=> $title
        ]);
    }

    public function englishAction($id_question){
        $title = "Узнать свой уровень"; // $title - заголовок страницы
        $questions=$this->testLevel_eng->getQuestion($id_question);

        $answers=$this->testLevel_eng->getAnswers($id_question);

        $view = 'english_test_view.php';
        $this->generateResponse($view,[
            'title'=> $title,
            'id_question'=>$id_question,
            'questions'=>$questions,
            'answers'=>$answers
        ]);
    }

    function englishResultAction()  {
      var_dump($_POST);
      // $dataObject = $_POST['data'];
      //   $json = json_decode($dataObject,true);
      $post = $_POST;
      $user_answ = [
          'id_good'=>$quantity,
      ];
        $title = "Узнать свой уровень"; // $title - заголовок страницы
        $view = 'test_result_view.php';
        $right_answ=$this->testLevel_eng->getRightAnswer();
        $this->generateResponse($view,[
            'title'=> $title,
            'user_answ'=>$user_answ,
            'right_answ'=>$right_answ
        ]);
    }

    public function deAction($id_question){

    }

    function deResultAction()  {

    }
}
