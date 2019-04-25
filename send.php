<?php

 

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


// Inicia a classe PHPMailer

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8'; 

$mail->SMTPDebug = 2; 

// Define os dados do servidor e tipo de conexão

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

$mail->IsSMTP(); // Define que a mensagem será SMTP

 

try {

     $mail->Host = 'host'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)

     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)

     $mail->Port       = 465; //  Usar 587 porta SMTP
     
     $mail->SMTPSecure = "ssl";

     $mail->Username = 'some@email.com'; // Usuário do servidor SMTP (endereço de email)

     $mail->Password = 'password'; // Senha do servidor SMTP (senha do email usado)

 

     //Define o remetente

     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    

     $mail->SetFrom('from@email.com', 'Nome do Remetente'); //Seu e-mail

     $mail->AddReplyTo('reply@email.com', 'Nome do Email para Resposta'); //Seu e-mail

     $mail->Subject = 'Assunto do Email';//Assunto do e-mail

 

 

     //Define os destinatário(s)

     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

    $mail->AddAddress('to@email.com', 'Nome do Email destinatario');

  
     

     //Campos abaixo são opcionais 

     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

    $mail->AddCC('copia@email.com', 'Nome do destinatario copia'); // Copia

     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta

     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo

 

	 /* Verificando os dados do formulário */

	$name = $_POST['inputName'];

	$email = $_POST['inputEmail'];

	$phone = $_POST['inputPhone'];

	$age = $_POST['inputAge'];

	$area = $_POST['area_selection'];

	

	

	

	/* $outro = (isset($_POST['outro']))? "Outros interesses": null;

	if(isset($_POST['outro'])){

		$interesse = $_POST['inputOutro'];

		}

		else {

			$interesse = null;

		}

	*/

     //Define o corpo do email

	 $mail->IsHTML(true);

     $mail->Body = "O usuário <b>$name</b> acaba de se cadastrar na landing page:

					<br>Dados do Usuário:

					<br>Nome: $name 

					<br>Idade: $age

					<br>E-mail: $email

					<br>Telefone: $phone

					<br>Interesses: $area";

					

	  

 

     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.

     //$mail->MsgHTML(file_get_contents('arquivo.html'));

     

     session_start();

     $_SESSION['name'] = $name;

     

     $mail->Send();

     echo header('Location: obrigado.php');

     exit();

     

 

    //caso apresente algum erro é apresentado abaixo com essa exceção.

    }catch (phpmailerException $e) {

      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer

}

?>