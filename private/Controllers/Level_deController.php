<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class Level_deController extends Controller {

  function indexAction()  {
    $title = "Узнать свой уровень"; // $title - заголовок страницы
    $view = 'Level_de_view.php';
    $this->generateResponse($view,[
        'title'=> $title,
        'question'=>$question,
        'answers'=>$answers
    ]);
  }
  }
