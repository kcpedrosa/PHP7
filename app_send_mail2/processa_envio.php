<?php 
//PLS REENTER YOUR PASSWORD AND EMAIL BELLOW

	require "./bibliotecas/PHPMailer/Exception.php";
	require "./bibliotecas/PHPMailer/OAuth.php";
	require "./bibliotecas/PHPMailer/PHPMailer.php";
	require "./bibliotecas/PHPMailer/POP3.php";
	require "./bibliotecas/PHPMailer/SMTP.php";

	//Import PHPMailer classes into the global namespace
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

//print_r bellow for debugging, you can comment it if you want
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	class Mensagem {
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		public $status = array('codigo_status' => null, 'descricao_status' => '');

		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
		public function msgValida(){
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
				return false;
			}
			return true;
		}

	}

	$msg = new Mensagem();

	$msg->__set('para',$_POST['para']);
	$msg->__set('assunto',$_POST['assunto']);
	$msg->__set('mensagem',$_POST['mensagem']);

//print_r bellow for debugging, you can comment it if you want
	echo "<pre>";
	print_r($msg);
	echo"</pre>";


	if($msg->msgValida()==false){
		echo "<br> Msg INválida";
		header('Location: index.php?login=erro');
	} 

		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    //set the debug to false and those long logs will not be displayed
		    $mail->SMTPDebug = false;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;
		    //ENTER YOUR EMAIL BELLOW                       // Enable SMTP authentication
		    $mail->Username = 'john5coding00@gmail.com';            // SMTP username
		    $mail->Password = //ENTER PASSWORD HERE;                      // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('john5coding00@gmail.com', 'John5 Coding Remetente');
		    $mail->addAddress($msg->__get('para'));     // Add a recipient
		    //$mail->addAddress('ellen@example.com');               // Name is optional
		    //$mail->addReplyTo('info@example.com', 'Information'); //automated recipient
		    //$mail->addCC('cc@example.com');  //email with copy
		    //$mail->addBCC('bcc@example.com'); //email with ocult copy

		    //Attachments //anexar arquivos ao email
		   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $msg->__get('assunto');
		    $mail->Body    = $msg->__get('mensagem');
		    $mail->AltBody = 'Use an email client with support for HTML tags...';

		    $mail->send();

		    //code bellow set a message and code for success
		    $msg->status['codigo_status'] = 1;
		    $msg->status['descricao_status'] = 'Alles blau! Message has been sent! ';

		    
		} catch (Exception $e) {
			//code bellow sets a message of error
		    $msg->status['codigo_status'] = 2;
			$msg->status['descricao_status'] = 'Message cannot be sent=Error, please retry later. //' . $mail->ErrorInfo;
		}

?>

<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<!-- Bootstrap início -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
      				<?php
      					if($msg->status['codigo_status'] == 1){ ?>

      					<div class="card-body font-weight-normal">
						
						<div class="card" style="width: 18rem; ">
						<!--this additional div is to set a larger grey background behind the img-->
						<div style="background-color: #D8D8D8">	
						  <img class="card-img-top" src="https://cdn.bulbagarden.net/upload/5/55/016Pidgey.png" alt="Card image cap " style="height: 120px; width: 120px; display: block; margin-left: auto; margin-right: auto; ">
						</div>
						  <div class="card-body">
						    <h5 class="card-title text-success">E-mail enviado com sucesso!</h5>
						    <p class="card-text">
						    <?= //remember, this is the print tag of PHP
						    $msg->status['descricao_status'];
						    ?></p>
						    <a href="index.php" class="btn btn-success">  &nbsp;Voltar&nbsp;  </a>
						  </div>
						</div>

						</div>

      					<?php }
      				  ?>
      				
      				 <?php
      					if($msg->status['codigo_status'] == 2){ ?>

      						<div class="card-body font-weight-normal">
						
						<div class="card" style="width: 18rem; ">
						<div style="background-color: #D8D8D8">	
						  <img class="card-img-top" src="https://cdn.bulbagarden.net/upload/thumb/5/53/054Psyduck.png/240px-054Psyduck.png" alt="Card image cap " style="height: 120px; width: 120px; display: block; margin-left: auto; margin-right: auto; ">
						</div>
						  <div class="card-body">
						    <h5 class="card-title text-danger">Erro ao enviar e-mail!</h5>
						    <p class="card-text"><?= 
						    //remember, this is the print tag of PHP
						    $msg->status['descricao_status'];
						    ?>
						    	
						    </p>
						    <a href="index.php" class="btn btn-danger">  &nbsp;Voltar&nbsp;  </a>
						  </div>
						</div>

					</div>

      					<?php }
      				  ?>

  					<!--this bellow was the model we used for success and error 
					<div class="card-body font-weight-normal">
						
						<div class="card" style="width: 18rem; ">
						<div style="background-color: grey">	
						  <img class="card-img-top" src="https://cdn.bulbagarden.net/upload/5/55/016Pidgey.png" alt="Card image cap " style="height: 120px; width: 120px; display: block; margin-left: auto; margin-right: auto; ">
						</div>
						  <div class="card-body">
						    <h5 class="card-title text-success">E-mail enviado com sucesso!</h5>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    <a href="#" class="btn btn-success">Go somewhere</a>
						  </div>
						</div>

					</div>
					-->

				</div>
      		</div>
      	</div>
    <!-- Optional JavaScript YOU WILL need it to make some components work well, like the dropdown-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 	
	</body>
</html>