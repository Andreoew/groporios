<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$name = addslashes($_POST['name']);
$telefone = addslashes($_POST['telefone']);
$email= addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "contato@gruporiosengenharia.com.br";
$subject = "Contato - Grupo Rios Engenharia";
$body = "Nome: ".$name. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:gruporiosengenharia.com.br"."\r\n".
            "Reply-To:".$email."\e\n".
            "x=Mailer:PHP/".phpversion();

            
if(mail($to,$subject,$body,$header)){
    echo("$name, O Email enviado com sucesso!");
    

}else{
    echo("$name, O Email não pode ser enviado");
}
}

           




?>