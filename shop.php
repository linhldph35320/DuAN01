<?php

    include("model/pdo.php");
    include("model/sanpham.php");
    $allsp = loadAll_sanpham_sp();
    include("view/header.php");

    include("view/viewshop/homeshop.php");

    include("view/footer.php");
?>