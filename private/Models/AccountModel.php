<?php
namespace Tatiana\Polyglot\Models;
use Tatiana\Polyglot\App\DB;

class AccountModel

{
    private $db;
    private $tablename = 'Users';
    public function __construct()
    {
        $this->db = new DB();
    }

    private function is_user($login){
        $sql = "SELECT login FROM Users WHERE login= :login";
        $params = [
            'login'=>$login
        ];
        return $this->db->fetchData($sql, $params); //['login'=>]
    }

    public function addUser($user_data){
        if ($this->is_user($user_data['login']) === false) {
            $sql = "INSERT INTO Users
         ('full_name',gender,age,phone,city,email,hash,login,id_user)
        VALUES (:full_name, :gender, :age, :phone, :city, :email,:hash,:login,:id_user);";
            echo "added";
            return $this->db->executePrepareSql($sql, $user_data);
        }
        else {
        echo 'User exists';
      }
    }


  function check_user_data($login, $hash) {
    if ($this->is_user($user_data['login']) === true) {
    $pwd_data="SELECT hash from Users WHERE login=:login";
    $params = [
        'login'=>$login
    ];
        if (password_verify($post['passoword'], $pwd_data['hash'])){
          return $this->authUser();
        }
        else {
          echo "Неверный пароль";
          return false;
        }
    }
    else {
      echo "Пользователя не существует";
      return false;
    }
  }

  public function authUser() {
  $this->session->set_unset_session_var('login', $post['login']);
  $this->session->set_unset_session_var('start', true);
  }

  public function logOut() {
  if($this->session->is_session('login', $post['login'])) {
  $this->session->remove_session_var($post['login']);
  setcookie('login', '', time() - 1);
  setcookie('password', '', time() - 1);
  }

  }

  // logout();
  // function logout(){
  //     session_start();
  //     unset($_SESSION['login']);
  //     setcookie('login', '', time() - 1);
  //     setcookie('pwd', '', time() - 1);
  // }

  public function getUserFullName($login) {
    $fullName='SELECT full_name FROM Users';
    $fullName.=' WHERE login = :login';
    $params = [
        'login'=>$login
    ];
    return $this->db->fetchData($sql, $params);
  }

}
