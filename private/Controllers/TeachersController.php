<?php
 namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\TeachersModel;

class TeachersController extends Controller // Goods
{
    private $teachersModel;
    function __construct()
    {
          $this->teachersModel = new TeachersModel();
    }

    public function indexAction(){
        $title="Наши учителя";
        $teachers = $this->teachersModel->getAllTeachers();
        $view='teachers_view.php';
        $this->generateResponse($view, [
            'title' => $title,
            'teachers'=>$teachers,
        ]);
    }
  }
