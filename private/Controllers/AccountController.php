<?php
 namespace Tatiana\Polyglot\Controllers;
 use Tatiana\Polyglot\App\Controller;
 use Tatiana\Polyglot\Models\AccountModel;


class AccountController extends Controller
{
    private $account_model;
    public function __construct()
    {
        $this->account_model = new AccountModel();
    }

    function registrationAction()  {
       $title = "Регистрация"; // $title - заголовок страницы
       $view = 'registration_view.php';
       $this->generateResponse($view,[
           'title'=> $title,

       ]);
     }

     public function process_registrationAction(){
         $post = $_POST;
         echo $this->account_model->addUser($post);
     }

    // public function process_registrationAction(){
    //     echo "registrationAction";
    //     $post = $_POST;
    //     $user_data = [
    //         'full_name'=>$post['username'],
    //         'gender'=>$post['gender'],
    //         'age'=>$post['age'],
    //         'phone'=>$post['tel'],
    //         'city'=>$post['citySelector'],
    //         'email'=>$post['email'],
    //         'hash'=>password_hash($post['password'], PASSWORD_DEFAULT),
    //         'login'=> $post['login']
    //     ];
    //     $add_u=$this->account_model->addUser($user_data);
    //     if ($add_res) {
    //         echo "add";
    //     } else {
    //         echo "not add";
    //     }
    // }


    public function authAction(){
        $post = $_POST;
        $auth_data = [
            'login'=>$post['login'],
            'password'=>$post['password'],
        ];

        if ($this->account_model->check_user_data($auth_data)) {
          $auth_pers=$this->account_model->authUser($auth_data);
          $title_name=$this->account_model->getUserFullName($auth_data['login']);
          $title='Здравствуйте,' . $title_name . '!';
          \header("Location:account/auth");
          return $this->generateResponse('account_view.php', [
              'title'=>$title,
              'auth_pers'=>$auth_pers]);
            //  echo "ON";
          }
        else {
          echo "OFF";
          \header("Location: account/registration");
           // $this->registrationAction();
        }
}

   public function logOut(){

}

}
?>
