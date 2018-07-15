<?php
namespace Tatiana\Polyglot\Models;


class MailRequestModel {

  public function sendMail() {

    $message = "Имя:".  $name . "\nТелефон:" . $phone . "\n Email:" . $email . "\n Комментарий:" . $textarea;
    $pagetitle = "Новая заявка с сайта" . $sitename;

    return mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
  }

}
?>
