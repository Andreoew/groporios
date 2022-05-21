<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email= addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "contato@gruporiosengenharia.com.br";
$subject = "Contato - Grupo Rios Engenharia";
$body = "Nome: ".$nome. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:gruporiosengenharia.com.br"."\r\n".
            "Reply-To:".$email."\e\n".
            "x=Mailer:PHP/".phpversion();

            
if(mail($to,$subject,$body,$header)){
    echo("$nome, O Email enviado com sucesso!");
    

}else{
    echo("$nome, O Email não pode ser enviado");
}
}

           




?>