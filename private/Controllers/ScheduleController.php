<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class ScheduleController extends Controller {

  function indexAction()  {
    $title = "Группы на старте"; // $title - заголовок страницы
    $view = 'schedule_view.php';
    $this->generateResponse($view,[
        'title'=> $title,

    ]);
  }
    }
