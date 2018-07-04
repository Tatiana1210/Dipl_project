<?php

namespace Tatiana\Polyglot\Controllers;
use Tatiana\Polyglot\App\Controller;
use Tatiana\Polyglot\Models\MailRequestModel;

class MailRequestController {

private $recepient = "tatiana.k95@mail.ru";
private $sitename = "Polyglot";

private $mailRequestModel;

public function __construct()
{
      $this->mailRequestModel = new MailRequestModel();
}

public function sendAction() {

  $name = trim($_POST['username']);
  $phone = trim($_POST['phone_num']);
  $email = trim($_POST['mail']);
  $textarea=trim($_POST['textarea']);

  $data = [
    'name'=>$name,
    'phone'=>$phone,
    'email'=>$email,
    'textarea'=>$textarea,
  ];

$to_send_mail = $this->mailRequestModel->sendMail($data);

  if ($to_send_mail==true) {
    echo 'ok';
  }
  else {
    echo "unknown problem";
  }
}
}
