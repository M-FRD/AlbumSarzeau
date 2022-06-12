<?php
function is_login(): bool{
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION["login"]);
}

function force_user_login(): void{
    if(!is_login()){
        header("Location: /login.php");
    }
}
?>