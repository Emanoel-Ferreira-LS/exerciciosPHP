<?php
    if(isset($_POST['email']) && 
    !empty($_POST) &&
    isset($_POST['pass']) &&
    !empty($_POST['pass'])){
        $user = "emanoel@gmail.com";
        $senha = "123456";

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if($email == $user && $senha == $pass){
            echo 'Login com sucesso';
        }else{
            echo 'Deu errado. Tente novamente';
        }
    }
?>