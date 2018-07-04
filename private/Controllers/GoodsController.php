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

    public function showAction ($id) {
            $title="Товар";
            $comodity= $this->goodsModel->getComodity ($id);
            $this->generateResponse('comodity_view.php', [
                'title'=>$title,
                'comodity'=>$comodity
            ]);
        }
      }
    
