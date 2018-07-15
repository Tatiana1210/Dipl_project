<?php
namespace Tatiana\Polyglot\App;

class Session
{
    // 1. Завершение сесии
    // 2. Установка переменной сессии
    // 3. Проверка открытой сессии
    // 4. Удаление переменной сессии
    public function stop_session(){
//        session_destroy();
        $_SESSION = array();
    }

    public function set_unset_session_var($var_name, $var_val=false){
        if (!$var_val){
            $_SESSION[$var_name] = $var_val;
        } else {
            unset($_SESSION[$var_name]);
        }
    }
    public function is_session($var_name){
        return isset($_SESSION[$var_name]);
    }
    public function get_session_var($var_name) {
        return $_SESSION[$var_name];
    }

   public function remove_session_var($var_name){
       unset($_SESSION[$var_name]);
   }
}
