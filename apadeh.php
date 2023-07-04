<?php

if(isset($_GET['page'])) { 

    $page = $_GET['page'];
    switch($page) {
        case'kangen' :
            include 'view/kalo_kangen.php';
            break;

        case 'kangen banget' :
            include 'view/tampil_kangen.php';
            break;
    }

}else{

    include 'views/kalo_kangen.php';

}


?>