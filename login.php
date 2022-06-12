<?php
$error = null;
$password = '$2y$12$vWvfQI1cxClTyBPeYQz8punmOrFIHTCd8EZV9Fsbp2KYyCpPda3WK';
if(!empty($_POST["pseudo"]) && !empty($_POST["password"])){
    if($_POST["pseudo"] === "SarzeauGCU" && password_verify($_POST["password"], $password)){
        session_start();
        $_SESSION["login"] = 1;
        header("Location: /index.php");
    }else{
        $error = "Identifiants incorrects";
    }
}

require_once 'header.php';
headerHTML("CSS/login.css")
?>
<form action="" class="loginForm" method="post">
        <h2 class="form-title <?php if($error) echo "error"; ?>"><?php if($error){echo $error;} else{echo "Se connecter";} ?></h2>
        <input type="text" name="pseudo" id="pseudo" placeholder="Nom d'utilisateur">
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <button type="submit" class="submitProfil">Je me connecte</button>
    </form> 

<?php require_once 'footer.php'; ?>