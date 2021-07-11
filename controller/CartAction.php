<?php

include "../connection/config.php";

if (isset($_POST['orderBtn'])) {

    $pImg = $_POST['pImg'];
    $pName = $_POST['pName'];
    $pDes = $_POST['pDes'];
    $pPrice = $_POST['pPrice'];
    $pQty = $_POST['pQty'];

    $sql = "INSERT INTO cart(P_Img, P_Name, P_Des, P_Price, P_Qty, Total_Price) VALUES ('$pImg','$pName','$pDes','$pPrice','$pQty','$pPrice')";
    $query = mysqli_query($con,$sql);
    header("location:../index.php");

}

// MEN
if (isset($_POST['ordersBtn'])) {

    $pImg = $_POST['pImg'];
    $pName = $_POST['pName'];
    $pDes = $_POST['pDes'];
    $pPrice = $_POST['pPrice'];
    $pQty = $_POST['pQty'];

    $sql = "INSERT INTO cart(P_Img, P_Name, P_Des, P_Price, P_Qty, Total_Price) VALUES ('$pImg','$pName','$pDes','$pPrice','$pQty','$pPrice')";
    $query = mysqli_query($con,$sql);
    header("location:../include/MEN.php");

}

// KIDS
if (isset($_POST['kOrderBtn'])) {

    $pImg = $_POST['pImg'];
    $pName = $_POST['pName'];
    $pDes = $_POST['pDes'];
    $pPrice = $_POST['pPrice'];
    $pQty = $_POST['pQty'];

    $sql = "INSERT INTO cart(P_Img, P_Name, P_Des, P_Price, P_Qty, Total_Price) VALUES ('$pImg','$pName','$pDes','$pPrice','$pQty','$pPrice')";
    $query = mysqli_query($con,$sql);
    header("location:../include/KID.php");

}




if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
    $stmt = $con->prepare('SELECT * FROM cart');
    $stmt->execute();
    $stmt->store_result();
    $row = $stmt->num_rows;
    echo $row;
}



if (isset($_POST['qty'])) {
    
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];

    $tprice = $qty * $pprice;

    $stmt = $con->prepare('UPDATE cart SET P_Qty=? ,Total_Price=? WHERE ID=?');
    $stmt->bind_param('isi',$qty,$tprice,$pid);
    $stmt->execute();
}


// INDEX PAGE

// index page
if (isset($_GET['id1'])) {
    
    $p_id = $_GET['id1'];

    $sql = "DELETE FROM cart WHERE ID='$p_id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        header("location:../index.php");
    }
}


// SHOPPING CART PAGE

if (isset($_GET['idd'])) {
    
    $p_id = $_GET['idd'];

    $sql = "DELETE FROM cart WHERE ID='$p_id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        header("location:../include/ShoppingCart.php");
    }
}



// MEN PAGE
if (isset($_GET['id2'])) {

    $p_id = $_GET['id2'];

    $sql = "DELETE FROM cart WHERE ID='$p_id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:../include/MEN.php");
    }
}

// MEN PAGE
if (isset($_GET['id3'])) {

    $p_id = $_GET['id3'];

    $sql = "DELETE FROM cart WHERE ID='$p_id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("location:../include/KID.php");
    }
}

?>