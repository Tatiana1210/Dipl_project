<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class PriceController extends Controller {

  function indexAction()  {
    $title = "Цены и акции"; // $title - заголовок страницы
    $view = 'price_view.php';
    $this->generateResponse($view,[
        'title'=> $title,

    ]);
  }
    }
