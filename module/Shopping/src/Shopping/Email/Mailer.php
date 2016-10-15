<?php


namespace Shopping\Email;

use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;

use Zend\Mime\Part as MimePart;
use Zend\Mime\Message as MimeMessage;
use Zend\Mail\Message;

class Mailer {
    
    
    
    public function execEmail($mail_body,$email,$nome,$subject){
		
		
		$this->subject_type = $subject;
		$this->email = $email;
		$this->nome = $nome;
		//$this->idconfemail = $idconfemail;
		$this->mail_body = $mail_body;
		
		//->addBcc("mchagas@brascomm.net")
		
		$body = new MimeMessage();			
		$htmlPart = new MimePart($this->mail_body);
		$htmlPart->type = "text/html";
		$body->setParts(array($htmlPart));
		
		
		
		$message = new Message();
		$message->addFrom("servidor@otimonegocio.com.br", "Suporte ÓtimoNegócio")
		->addTo($this->email)
		->setSubject($this->subject_type);
		$message->setBody($body);
		$message->setEncoding("UTF-8");
		
		
		$transport = new SmtpTransport();
		
		$options   = new SmtpOptions(array(
				'name'              => 'localhost',
				'host'              => 'smtp.gmail.com',
				'port' => 587,
				'connection_class'  => 'login',
				'connection_config' => array(
						'username' => 'servidor@otimonegocio.com.br',
						'password' => '@Otn1234567',
						"ssl" => "tls"
				),
		));
		
		// Set UTF-8 charset
		$headers = $message->getHeaders();
		$headers->removeHeader('Content-Type');
		$headers->addHeaderLine('Content-Type', 'text/html; charset=UTF-8');
		
		$transport->setOptions($options);	
		
		
		#aplicar try catch depois de personalizado
                
                
                try {
                    
                    $transport->send($message);
                    return true;
                    
                } catch (\Zend\Mail\Transport\Exception $exc) {
                    echo $exc->getTraceAsString();
                    
                    return false;
                }


                /*
                if($transport->send($message)){
			
			$this->ok_sent = true;
			
		} else{
			
			$this->ok_sent = false;
			
		} */
		#########################################
		
		
		//return $this->ok_sent;		
	}
    
    
    
}
