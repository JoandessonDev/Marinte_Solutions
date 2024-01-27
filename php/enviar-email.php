<?php
  //Variáveis
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $telefone = $_POST['tel'];
  $mensagem = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "

  Você recebeu o contato de uma pessoa interessada em seus serviços:

      Nome: $nome
      E-mail: $email
      Telefone: $telefone
      Mensagem: $mensagem

  Este e-mail foi enviado em $data_envio às $hora_envio
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "mpservicos47@gmail.com";
  $assunto = "Contato pelo Site - $nome";


  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=http://mpservicos.com'>";
?>