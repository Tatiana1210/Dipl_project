<?php
 namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;


class ContactController extends Controller {
  function indexAction()  {
    $title = "Контакты"; // $title - заголовок страницы
    $view = 'contacts_view.php';

    $this->generateResponse($view, [ //зачем здесь  массив?
        'title'=> $title]);
  }
}
