<?php

include "../connection/config.php";


if (isset($_POST['save'])) {

    $pImg = $_FILES['img']['name'];
    $pName = $_POST['pName'];
    $pDes = $_POST['pDes'];
    $pQty = $_POST['pQty'];
    $pPrice = $_POST['pPrice'];


    $target = '../assets/upload/' . $pImg;
    move_uploaded_file($_FILES['img']['tmp_name'], $target);

    $sql = "INSERT INTO k_section_4(P_Img, P_Name, P_Des, P_Qty, P_Price) VALUES ('$pImg','$pName','$pDes','$pQty','$pPrice')";
    $query = mysqli_query($con, $sql)or die("error");


    if ($query) {
        header("location:../include/addProduct-1.php");
    }else {
        echo "error";
    }
}




?>