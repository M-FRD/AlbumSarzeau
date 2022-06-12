<?php
    function transfert(){
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 2500000;
        $ret        = is_uploaded_file($_FILES['image']['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['image']['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $_FILES['image']['type'];
            $img_nom  = $_POST['img-title'];
            $dbrequest = new PDO('mysql:host=localhost;dbname=gallerysarzeauv1',"root","root");     
            $img_blob = file_get_contents($_FILES['image']['tmp_name']);
            $req = $dbrequest->prepare("INSERT INTO images (" . 
                                "img_nom, img_taille, img_type, img_blob " .
                                ") VALUES (" .
                                "'" . $img_nom . "', " .
                                "'" . $img_taille . "', " .
                                "'" . $img_type . "', " .
                                "'" . addslashes ($img_blob) . "') ");
            $req->execute();
        }
    }
?>  