<?php
ini_set ('display_errors', 1);

error_reporting (E_ALL);
//
// $data = file_get_contents("php://input");
// $dataJsonDecode = json_decode($data);

$name = strtoupper($_POST['name']);
$from = strtolower($_POST['email']);
$subject = strtoupper($_POST['department']." - ".$_POST['client']);
$message = strtolower($_POST['message']);
$fone = $_POST['fone'];

$message .= ' <<TELEFONE PARA CONTATO: '.$fone.'>>';
// $name = $dataJsonDecode->name;
// $from = $dataJsonDecode->email;
// $subject = $dataJsonDecode->subject;
// $message = $dataJsonDecode->message;

$to = 'diogo@inovaenergia.com.br';

if(!empty($name) && !empty($from) && !empty($subject) && !empty($message)){
    $headers = 'From: '.$from. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)){
      header('Location: http://inovaenergia.com.br?email=success');
        // echo "Email enviado com sucesso.";
    } else {
      header('Location: http://inovaenergia.com.br?email=fail');
        // echo "Não foi possível enviar o email.";
    }

} else {
  header('Location: http://inovaenergia.com.br?email=incompleto');
    echo "Não foi possível enviar o email! Dados incompletos.";
}


?>
