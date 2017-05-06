<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    if(empty($_POST['rad'])){
        echo 'Please type a value';
        die();
    }
    if(empty($_POST['hei'])){
        echo 'Please type a value';
        die();
    }
    $rad = $_POST['rad'];
    $hei = $_POST['hei'];
    $action = $_POST['action'];

    if($action === 'vol'){
        $value = (pi()*$rad*$rad*$hei)/3;
        echo '<b>Cone volume: '.number_format($value, 2, '.', '').'</b>';
        die();
    }

    if($action === 'sarea'){
        $slant = sqrt($rad*$rad+$hei*$hei);
        $value = pi()*$rad*($slant+$rad);
        echo '<b>Cone surface area: '.number_format($value, 2, '.', '').'</b>';
        die();
    }
}
?>