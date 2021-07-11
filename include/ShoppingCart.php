<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/ShoppingCart.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/font/css/all.css">

</head>

<body>

    <!-- Navbar -->
    <?php
    include "Navbar.php";
    ?>

    <section class="link">
        <div class="max-width">
            <a href="../index.php">Home / </a>
            <a href="#">Shopping Cart</a>
            <div>
                <h2>My Cart</h2>
            </div>
        </div>
    </section>



    <?php

    include "../connection/config.php";

    $sql = "SELECT * FROM cart";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $grandTotal = 0;

    ?>


    <?php if ($count > 0) { ?>
        <section class="Box">
            <div class="max-width">
                <div class="grid">
                    <div class="box-1">
                        <table>
                            <thead class="thead">
                                <tr>
                                    <th style="text-align: left;">Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <?php foreach ($result as $result) { ?>
                                    <tr>
                                        <input type="hidden" class="pid" value="<?php echo $result['ID']; ?>">
                                        <td style="padding:30px 0px;">
                                            <div class="flex-1">
                                                <div class="p_img">
                                                    <img src="../assets/upload/<?php echo $result['P_Img']; ?>" alt="">
                                                </div>
                                                <div class="p_list">
                                                    <p><?php echo $result['P_Name']; ?></p>
                                                    <p><?php echo $result['P_Des']; ?></p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>$<?= number_format($result['P_Price'], 2) ?></td>
                                        <input type="hidden" class="pprice" value="<?php echo $result['P_Price']; ?>">
                                        <td><input type="number" class="itemQty" value="<?php echo $result['P_Qty']; ?>"></td>
                                        <td class="total_p">$<?= number_format($result['Total_Price'], 2) ?></td>
                                        <td><a href="../controller/CartAction.php?idd=<?php echo $result['ID'] ?>"><i class="fas fa-trash-alt"></i></a></td>

                                    </tr>
                                    <?php $grandTotal += $result['Total_Price']; ?>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="box-2">
                        <div class="g_total">
                            <p>Grand Total : $<?= number_format($grandTotal, 2); ?></p>
                        </div>

                        <form action="#">
                            <input type="checkbox"> I agree with the Terms & Conditons
                        </form>
                        <div class="link-2">
                            <a href="#">Proceed to checkout</a>
                            <a href="../index.php">continous shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } else {
        echo "<h4 style='text-align:center; color:red; margin:100px 0px;'>No items here! <a href='../index.php' style='text-decoration:underline; color:#000;' >Please Shopping Now</a></h4>";
    }
    ?>




    <!-- Footer -->
    <?php
    include "Footer.php";
    ?>




    <script src="../assets/plugin/jquery-3.5.1.min.js"></script>


    <script>

        
        //Quantity change
        $(document).ready(function() {
            $(".itemQty").on("change", function() {

                var $el = $(this).closest("tr");

                var pid = $el.find(".pid").val();
                var pprice = $el.find(".pprice").val();
                var qty = $el.find(".itemQty").val();
                $.ajax({
                    url: "../controller/CartAction.php",
                    method: "post",
                    cache: false,
                    data: {
                        qty: qty,
                        pid: pid,
                        pprice: pprice
                    },
                    success: function(response) {
                        location.reload(true);
                        console.log(response);
                    }
                });
            });
        });
    </script>











</body>

</html>