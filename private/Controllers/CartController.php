<?php
 namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\CartModel;

class CartController extends Controller
{
    private $cartModel;
    function __construct()
    {
          $this->cartModel = new CartModel();
    }

    public function indexAction(){
        $title="Содержимое корзины";
        $cart_items = $this->cartModel->getCartItems();
        $view='cart_view.php';
        $this->generateResponse($view, [
            'title' => $title,
            'cart_items'=>$cart_items,
        ]);
    }


  public function addAction ($id_good){


    $add_good=$this->cartModel->addGood($id_good);


    //CartModel::addProduct($id_good);
    $referrer=$_SERVER['HTTP_REFERER'];
    header("Location:referrer");

  }
}
