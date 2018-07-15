<?php
namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\GoodsModel;

class GoodsController extends Controller // Goods
{
    private $goodsModel;
    function __construct()
    {
          $this->goodsModel = new GoodsModel();
    }

    public function indexAction(){
        $title="Все товары";
        $goods = $this->goodsModel->getAllGoods();
        $view='shop_view.php';
        $this->generateResponse($view, [
            'title' => $title,
            'goods'=>$goods,
        ]);
    }

    public function showAction ($id_good) {
            $title="Товар";
            $comodity= $this->goodsModel->getComodity ($id_good);
            $this->generateResponse('comodity_view.php', [
                'title'=>$title,
                'comodity'=>$comodity
            ]);
        }

        public function addAction ($id_good){
          $add_good=$this->goodsModel->addGood($id_good);
          //CartModel::addProduct($id_good);
          $referrer=$_SERVER['HTTP_REFERER'];
          header("Location:referrer");

        }
      }
