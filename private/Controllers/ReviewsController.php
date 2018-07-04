<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\ReviewsModel;

class ReviewsController extends Controller {

  private $reviews_model;
  function __construct()
  {
      $this->reviews_model = new ReviewsModel();
  }

  function indexAction()  {
    $title = "Отзывы"; // $title - заголовок страницы
    $view = 'reviews_view.php';
    $reviews = $this->reviews_model->getAllReviews();
    $this->generateResponse($view,[
        'title'=> $title,
        'reviews'=>$reviews,

    ]);
  }

  function addAction(){
      $post = $_POST;
      // получение данных
      $review_data = [
          'id_review'=> 1,
          'full_name'=>$post['full_name'],
          'rating'=>$post['rating'],
          'review_text'=>$post['review_text'],
      ];
      $add_res = $this->review_model->addReview($review_data);
      if ($add_res) {
          echo "add";
      } else {
          echo "not add";
      }
  }
    }
