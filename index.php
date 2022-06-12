<?php
include_once 'auth.php';
force_user_login();
include_once 'header.php';
headerHTML(null);
$dbrequest = new PDO('mysql:host=localhost;dbname=gallerysarzeauv1',"root","root");     
$getDataImages = $dbrequest->prepare("SELECT * FROM images");
$getDataImages->execute();
$images = $getDataImages->fetchAll(PDO::FETCH_ASSOC);
$y=4;
$x=3;
?>
<div class="Album">
    <?php foreach($images as $image): ?>
        <div class="imageAlbumContainer">
            <div class="imgAlbumContainer">
                <img class="imgAlbum" src="data:image/jpeg;base64,<?= base64_encode( $image["img_blob"])?>"/>
            </div>
            <p class="imgAlbumTitle"><?= $image["img_nom"] ?></p>
        </div>
        
    <?php endforeach?>
</div>

<?php
include_once 'footer.php';
?>