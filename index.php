<?php
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "view/home.php";
    include "view/footer.php";
    $listdm=loadAll_danhmuc();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
        }
    }
?>