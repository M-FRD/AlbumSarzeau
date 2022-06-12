<?php
include_once 'auth.php';
force_user_login();
include_once 'header.php';
headerHTML('CSS/addImage.css');
include_once "transfert.php";
$error = null;
if ( isset($_FILES['image']) && isset($_POST['img-title']) )
{
    if(strlen($_POST['img-title']) > 50){
        $error = "Le titre de votre image est trop grand !";
    }
    else{
        transfert();
    }
}


?>

    <form action="" class="addImageForm" method="post" enctype="multipart/form-data">
        <h2 class="form-title <?php if($error) echo "error"; ?>"><?php if($error){echo $error;} else{echo "Se connecter";}?></h2>
        <input type="text" name="img-title" id="img-title" placeholder="Titre de l'image">
        <label for="getImage" class="addImage">Choisir une image</label>
        <input type="file" id="getImage"accept="image/png, image/jpeg" name="image">
        <button type="submit" class="submitImage">Ajouter l'image</button>
    </form>
    
</div>
<?php
include_once 'footer.php';
?>