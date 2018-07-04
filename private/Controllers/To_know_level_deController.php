<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class To_know_level_deController extends Controller {

  function indexAction()  {
    $title = "Узнать свой уровень"; // $title - заголовок страницы
    $view = 'to_know_level_de_view.php';
    $this->generateResponse($view,[
        'title'=> $title,
        'question'=>$question,
        'answers'=>$answers
    ]);
  }
  }
