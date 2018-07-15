<?php
namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class CartModel {

  public function addGood($id_good) {
    //$id_good=integer($id_good);

    //Пуст массив для тов
    $goodsInCart=array();

    //Если в таблице уже есть товары
    if (isset($_SESSION['goods'])) {
      //заполн массив с товарами
        $goodsInCart=$_SESSION['goods'];
    }

    //Если товар есть в корзине, но был добавлен еще раз, увел кол-во
    if (array_key_exists($id_good, $goodsInCart)){
          $goodsInCart[$id_good]++;
  }
    else {
       //добавл нов тов
      $goodsInCart[$id_good]=1;
    }

    $_SESSION['goods']=$goodsInCart;
  }


//Подсчет колличества товаров в сессии
  public function CountItems() {
    if (isset($_SESSION['goods'])) {
        $count=0;
        //в сессии будет  Array ([$id_good]=>1;[$id_good=>2])
        foreach ($_SESSION['goods'] as $id_good=>$quantity){
          //суииа кол-в всех товаров
          $count=$count+$quantity;
        }
        return $count;
    }
    else {
      return 0;
    }
  }
}
