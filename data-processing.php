<?php
$action = $_POST['action'];
$email = $_POST['mail'];
$password = $_POST['password'];




if($action=='mailer')
    {

        echo'<br/><strong>coàoooooll+++++!</strong><br/>';
}
else
    {
        echo'<br/><strong>Boutonnongéré!</strong><br/>';
    }
$message='Voici vos identifiants d\'inscription:'.PHP_EOL;
$message.='Email:'.$email.PHP_EOL;
$message.='Motdepasse:'.PHP_EOL.$password;