<?php

namespace Hcode;
//Classe para recuperar senha no email

use Rain\Tpl;
/* com essa classe podemos utilizar para recupar a senha perdida.
 no momento esta funcionando somente a função de mandar para o email e 
 apartir de agora vou trabalhar para enviar a nova senha no banco e 
 o usuario poder logar com ela.*/
class Mailer{

	const USERNAME = "eduardoh.lima14@gmail.com";
	const PASSWORD = "<?36739908?>";
	const NAME_FROM = "Hcode Store";

	private $mail;

	public function __construct ($toAddress, $toName, $subject, $tplName, $data = array())
	{

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email/",
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false 
	    );
	
		Tpl::configure($config);

		$tpl = new Tpl;

		foreach ($data as $key => $value) {
			$tpl->assign($key, $value);
		}

		$html = $tpl->draw($tplName, true);

		$this->mail = new \PHPMailer;

		$this->mail->isSMTP();

		$this->mail->SMTPdebug = 0;

		$this->mail->Debugoutput = 'html';

		$this->mail->Host = 'smtp.gmail.com';

		$this->mail->Port = 587;

		$this->mail->SMTPSecure = 'tls';

		$this->mail->SMTPAuth = true;

		$this->mail->Username = Mailer::USERNAME;

		$this->mail->Password = Mailer::PASSWORD;

		$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

		$this->mail->addAddress($toAddress,$toName);

		$this->mail->Subject = $subject;

		$this->mail-> msgHTML($html);

		$this->mail->AltBody = 'Teste';

	}

	public function send()
	{
		return $this->mail->send();
	}

}
?>