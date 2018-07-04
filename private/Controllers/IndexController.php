<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class IndexController extends Controller {
  function indexAction()  {
    $title = "Главная"; // $title - заголовок страницы
    $view = 'index_view.php';

    $this->generateResponse($view, [
        'title'=> $title]);
  }
}
