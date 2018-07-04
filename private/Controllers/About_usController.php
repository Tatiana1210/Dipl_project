<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class About_usController extends Controller {

  function indexAction()  {
    $title = "О нас"; // $title - заголовок страницы
    $view = 'about_us_view.php';
    $this->generateResponse($view,[
        'title'=> $title,

    ]);
  }
    }
