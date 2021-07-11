<?php
include "../connection/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/MEN.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/font/css/all.css">
</head>

<body>



    <div class="scroll-up_btn">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- NAVBAR-1 -->

    <nav class="nav-1">
        <div class="max-width">
            <div class="flex">
                <ul class="menu-item">
                    <li style=" background-color: #3854B0;"><a href="../index.php" class="item" >Women</a></li>
                    <li style="background-color: #fff;"><a href="MEN.php" class="item" style=" color:#000;">Men</a></li>
                    <li><a href="KID.php" class="item">Kids</a></li>
                </ul>
                <div>
                    <p>Availabel 24/7 at (018)-900 6690</p>
                </div>
            </div>
        </div>
    </nav>

    <!-- END OF NAVBAR-1 -->

    <!-- NAVBAR-2 -->

    <nav class="nav-2">
        <div class="max-width">
            <div class="flex-2 flex-item">
                <div class="logo">
                    <a href="../index.php"><img src="../assets/img/Men/logo-men.png" alt=""></a>
                </div>
                <ul class="hidden">
                    <li><a href="MEN.php">Home</a></li>
                    <li><a href="#" class="tBtn">trend</a></li>
                    <li><a href="#" class="cBtn">collection</a></li>
                    <li><a href="#" class="nBtn">new in</a></li>
                    <li><a href="#" class="bBtn">blog</a></li>
                    <li><a href="#" class="spBtn">Shop pages</a></li>
                    <li><a href="#" class="lBtn">lookbook</a></li>
                </ul>
                <ul class="margin">
                    <li><a href="#" onclick="toggle()"><img src="../assets/img/search.png" alt=""></a></li>
                    <li><a href="MenSignIn.php"><img src="../assets/img/user.png" alt=""></a></li>
                    <li><a href=""><img src="../assets/img/heart.png" alt=""></a></li>
                    <li><a href="#" class="cart-item sBtn"><img src="../assets/img/shopping-bag.png" alt="">
                            <div class="cart-items" id="cart-item"></div>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="trendBtn">
        <div class="trendBx">
            <div class="trend-grid">
                <div class="trend_Bx-1">
                    <p><a href="#">what news</a></p>
                    <p><a href="#">best selling</a></p>
                    <p><a href="#">top rated</a></p>
                    <p><a href="#">most popular</a></p>
                    <p><a href="#">editor picks</a></p>
                    <p><a href="#">on sale</a></p>
                </div>
                <div class="trend_Bx-1">
                    <h2>Harum quidem</h2>
                    <p><a href="#">all harum quidem</a></p>
                    <p><a href="#">cosmopolis</a></p>
                    <p><a href="#">suito</a></p>
                    <p><a href="#">milancelos</a></p>
                    <p><a href="#">glamos</a></p>
                    <p><a href="#">blazero</a></p>
                </div>
                <div class="trend_Bx-1">
                    <h2>possimus</h2>
                    <p><a href="#">all possimus</a></p>
                    <p><a href="#">cosmopolis</a></p>
                    <p><a href="#">suito</a></p>
                    <p><a href="#">milancelos</a></p>
                    <p><a href="#">glamos</a></p>
                    <p><a href="#">blazero</a></p>
                </div>
                <div class="trend_Bx-1">
                    <img src="../assets/img/Men/n-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="collection">
        <div class="coll_grid">
            <div class="coll_Bx-1">
                <img src="../assets/img/Men/n-4.jpg" alt="">
            </div>
            <div class="coll_Bx-1">
                <h2>possimus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="coll_Bx-1">
                <img src="../assets/img/Men/n-5.jpg" alt="">
            </div>
            <div class="coll_Bx-1">
                <h2>possimus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="coll_Bx-1">
                <img src="../assets/img/Men/n-6.jpg" alt="">
            </div>
            <div class="coll_Bx-1">
                <h2>possimus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="coll_Bx-1">
                <img src="../assets/img/Men/n-7.jpg" alt="">
            </div>
            <div class="coll_Bx-1">
                <h2>possimus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="coll_Bx-1">
                <img src="../assets/img/Men/n-8.jpg" alt="">
            </div>
            <div class="coll_Bx-1">
                <h2>possimus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
        </div>
    </section>


    <section class="newInBtn">
        <div class="new_grid">
            <div class="new_Bx-1">
                <p><a href="#">what news</a></p>
                <p><a href="#">best selling</a></p>
                <p><a href="#">top rated</a></p>
                <p><a href="#">most popular</a></p>
                <p><a href="#">editor picks</a></p>
                <p><a href="#">on sale</a></p>
            </div>
            <div class="new_Bx-1">
                <h2>Harum quidem</h2>
                <p><a href="#">all harum quidem</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="new_Bx-1">
                <h2>possimus </h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="new_Bx-1">
                <h2>necessitatibus</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>
            <div class="new_Bx-1">
                <h2>molaetias</h2>
                <p><a href="#">all possimus</a></p>
                <p><a href="#">cosmopolis</a></p>
                <p><a href="#">suito</a></p>
                <p><a href="#">milancelos</a></p>
                <p><a href="#">glamos</a></p>
                <p><a href="#">blazero</a></p>
            </div>

        </div>
        <div class="new_grid-1">
            <div class="new_Bx-1">
                <img src="../assets/img/Men/n-1.jpg" alt="">
            </div>
            <div class="new_Bx-1">
                <img src="../assets/img/Men/n-2.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="blogbtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Blog 1</a></li>
                <li><a href="#">Blog 2</a></li>
            </ul>
        </div>
    </section>

    <section class="shopBtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Shop 1</a></li>
                <li><a href="#">Shop 2</a></li>
                <li><a href="#">Shop 3</a></li>
            </ul>
        </div>
    </section>

    <section class="lookBtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Book 1</a></li>
                <li><a href="#">Book 2</a></li>
                <li><a href="#">Book 3</a></li>
            </ul>
        </div>
    </section>
    <!-- END OF NAVBAR-2 -->












    <!-- SEARCH BUTTON -->
    <section class="searchBtn" id="searchBtn">
        <div class="searchBx">
            <form action="#">
                <input type="text" placeholder="Search...">
            </form>
        </div>
    </section>

    <?php
    $query = "SELECT ID FROM cart ORDER BY ID";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_num_rows($query_run);

    ?>


    <?php

    $sql5 = "SELECT * FROM cart";
    $query5 = mysqli_query($con, $sql5);
    $count5 = mysqli_num_rows($query5);
    $result5 = mysqli_fetch_all($query5, MYSQLI_ASSOC);
    $grandTotal = 0;

    ?>

    <section class="s-card">
        <div class="oveflow">
            <div class="s-card_close"><i class="fas fa-times"></i>&nbsp; Close</div>
            <h2>your bag</h2>
            <div class="s-card_no"> <?php echo $row ?> items</div>
            <?php if ($count5 > 0) { ?>
                <div class="s-card-item">
                    <?php foreach ($result5 as $result5) { ?>
                        <div class="flexx">
                            <div class="p_img">
                                <img src="../assets/upload/<?php echo $result5['P_Img'] ?>" alt="">
                            </div>
                            <div class="p_detail">
                                <div class="p_name">
                                    <p><?php echo $result5['P_Name'] ?></p>
                                </div>
                                <input type="hidden" class="pid" value="<?php echo $result5['ID'] ?>">
                                <input type="hidden" class="pprice" value="<?php echo $result5['P_Price'] ?>">
                                <div class="p_price">
                                    <h4>$<?= number_format($result5['Total_Price'], 2)  ?></h4>
                                </div>
                                <div class="p_qty">
                                    <input type="number" class="itemQty" value="<?php echo $result5['P_Qty'] ?>">
                                </div>
                            </div>
                            <div class="del">
                                <a href="../controller/CartAction.php?idd=<?php echo $result5['ID'] ?>"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                        <?php $grandTotal += $result5['Total_Price'] ?>
                    <?php } ?>
                    <div class="flexx">
                        <p>Total</p>
                        <h3>$<?= number_format($grandTotal, 2)  ?></h3>
                    </div>
                    <div class="s-link">
                        <a href="#">check out</a>
                        <a href="ShoppingCart.php">view cart</a>
                    </div>

                </div>
            <?php
            } else {
                echo "<h4 style='text-align:center'>Please Shopping Now</h4>";
            } ?>
        </div>
    </section>




    <section class="social-icon">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fab fa-amazon"></i></a></li>
        </ul>
    </section>







    <script src="../assets/plugin/jquery.js"></script>








    <script>
        $(document).ready(function() {

            $(".s-card_close").click(function() {
                $(".s-card").toggleClass("show")
            })

            $(".sBtn").click(function() {
                $(".s-card").toggleClass("show")
            })

            $(".tBtn").click(function() {
                $(".trendBtn").toggleClass("show")
            })
            $(".cBtn").click(function() {
                $(".collection").toggleClass("show")
            });

            $(".nBtn").click(function() {
                $(".newInBtn").toggleClass("show")
            });

            $(".bBtn").click(function() {
                $(".blogbtn").toggleClass("show")
            })
            $(".spBtn").click(function() {
                $(".shopBtn").toggleClass("show")
            })
            $(".lBtn").click(function() {
                $(".lookBtn").toggleClass("show")
            })


            function load_cart_item_no() {
                $.ajax({
                    url: "../controller/CartAction.php",
                    method: "get",
                    data: {
                        cartItem: "cart-item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
            }
            load_cart_item_no();



            $(".scroll-up_btn").click(function() {
                $('html').animate({
                    scrollTop: 0
                });
                $('html').css("scrollBehavior", "auto");
            });



            $(window).scroll(function() {

                if (this.scrollY > 20) {
                    $('.nav-2').addClass("show");
                } else {
                    $('.nav-2').removeClass("show");
                }

                if (this.scrollY > 20) {
                    $('.s-card').addClass("active");
                } else {
                    $('.s-card').removeClass("active");
                }

                if (this.scrollY > 20) {
                    $('.scroll-up_btn').addClass("active");
                } else {
                    $('.scroll-up_btn').removeClass("active");
                }

                if (this.scrollY > 10) {
                    $('.trendBtn,.collection,.newInBtn').addClass("active");
                } else {
                    $('.trendBtn,.collection,.newInBtn').removeClass("active");
                }
            });


            $(".itemQty").on("change", function() {

                var $el = $(this).closest(".flexx");

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
    <script>
        function toggle() {
            var btn = document.getElementById("searchBtn")
            btn.classList.toggle('active')
        }
    </script>


</body>

</html>