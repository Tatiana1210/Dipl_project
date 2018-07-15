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
      var_dump($_POST);
      $post = $_POST;
      $review_data = [
          'full_name'=>$post['full_name'],
          'review_text'=>$post['review_text'],
          'date_time'=> $post['date_time']
      ];
      $add_res = $this->reviews_model->addReview($review_data);
      if ($add_res) {
          echo "add";
      } else {
          echo "not add";
      }
  }
    }
