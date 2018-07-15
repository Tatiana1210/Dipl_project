<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class ScheduleController extends Controller {

  function eng_scheduleAction()  {
    $title = "Группы на старте"; // $title - заголовок страницы
    $view = 'schedule_eng_view.php';
    $this->generateResponse($view,[
        'title'=> $title,

    ]);
  }

  function de_scheduleAction()  {
    $title = "Группы на старте"; // $title - заголовок страницы
    $view = 'schedule_de_view.php';
    $this->generateResponse($view,[
        'title'=> $title,

    ]);
  }
    }
