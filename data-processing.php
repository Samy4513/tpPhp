<?php
$action = $_POST['action'];
$email = $_POST['mail'];
$ID = $_POST['ID'];
$password = $_POST['password'];




if($action=='mailer')
    {
        $to = $email;
        $subject = 'Inscription';
        $message ="Voici votre compte :
                    ID = ". $ID ."<br/>
                  Mot de passe = " . $password;
        mail($to,$subject,$message,null);
        echo'<br/><strong>Mail Envoyé</strong><br/>';
}
else
    {
        echo'<br/><strong>Boutonnongéré!</strong><br/>';
    }
$message='Voici vos identifiants d\'inscription:'.PHP_EOL;
$message.='Email:'.$email.PHP_EOL;
$message.='Motdepasse:'.PHP_EOL.$password;