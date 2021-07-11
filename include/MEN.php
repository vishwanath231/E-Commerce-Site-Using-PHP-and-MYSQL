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
    <link rel="stylesheet" href="../assets/plugin/lightslider.css">
    <script src="../assets/plugin/jquery.js"></script>
    <script src="../assets/plugin/lightslider.js"></script>
</head>

<body>


    <!-- Sroll-Up Button -->
    <div class="scroll-up_btn">
        <i class="fas fa-arrow-up"></i>
    </div>


    <!-- Navbar-1 -->

    <nav class="nav-1">
        <div class="max-width">
            <div class="flex">
                <ul class="menu-item">
                    <li><a href="../index.php" class="item">Women</a></li>
                    <li><a href="#" class="item" style="color: #000;">Men</a></li>
                    <li><a href="KID.php" class="item">Kids</a></li>
                </ul>
                <div>
                    <p>Availabel 24/7 at (018)-900 6690</p>
                </div>
            </div>
        </div>
    </nav>



    <!-- Navbar-2 -->

    <nav class="nav-2">
        <div class="max-width">
            <div class="flex-2 flex-item">
                <div class="logo">
                    <a href="index.php"><img src="../assets/img/Men/logo-men.png" alt=""></a>
                </div>
                <ul class="hidden">
                    <li><a href="">Home</a></li>
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
                    <li><a href="#" class="cart-item sBtn">
                            <img src="../assets/img/shopping-bag.png" alt="">
                            <div class="cart-items" id="cart-item"></div>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Trend Pop-up Menu  -->
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


    <!-- Collection Pop-up Menu -->

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


    <!-- New-In Pop-up Menu -->

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


    <!-- Blog Pop-up Menu -->

    <section class="blogbtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Blog 1</a></li>
                <li><a href="#">Blog 2</a></li>
            </ul>
        </div>
    </section>


    <!-- Shop Pop-up Menu -->

    <section class="shopBtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Shop 1</a></li>
                <li><a href="#">Shop 2</a></li>
                <li><a href="#">Shop 3</a></li>
            </ul>
        </div>
    </section>


    <!-- Lookbook Pop-up Menu -->

    <section class="lookBtn">
        <div class="blogBx">
            <ul>
                <li><a href="#">Book 1</a></li>
                <li><a href="#">Book 2</a></li>
                <li><a href="#">Book 3</a></li>
            </ul>
        </div>
    </section>

    <!-- End Of  Navabr-2 -->


    <!-- Banner-1 -->
    <section class="ban-1"></section>
    <!-- End Of Banner-1 -->

    <!-- Banner-2 -->
    <section class="ban-2"></section>
    <!-- End Of Banner-2 -->



    <!-- Section Card-1 -->

    <?php
    $sql = "SELECT * FROM m_section_1";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
    <section class="card-1">
        <div class="card-1_grid">
            <div class="card_1-box_1">
                <div class="cont">
                    <p>New collection</p>
                    <h2>coats in trend</h2>
                    <a href="#">shop now</a>
                </div>
            </div>
            <ul class="card_1-box_2">
                <?php foreach ($result as $result) { ?>
                    <li class="card_1_item">
                        <div class="card_1_subBx">
                            <div class="card_1_imgBx">
                                <img src="../assets/upload/<?php echo $result['P_Img'] ?>" alt="" />
                                <div class="overlay">
                                    <form action="../controller/CartAction.php" method="POST">
                                        <input type="hidden" name="pId" value="<?php echo $result['ID'] ?>">
                                        <input type="hidden" name="pImg" value="<?php echo $result['P_Img'] ?>">
                                        <input type="hidden" name="pName" value="<?php echo $result['P_Name'] ?>">
                                        <input type="hidden" name="pDes" value="<?php echo $result['P_Des'] ?>">
                                        <input type="hidden" name="pQty" value="<?php echo $result['P_Qty'] ?>">
                                        <input type="hidden" name="pPrice" value="<?php echo $result['P_Price'] ?>">
                                        <button type="submit" name="ordersBtn" class="buy-btn">Buy Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="detail-box">
                                <div class="type">
                                    <h4><?php echo $result['P_Name'] ?></h4>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="des"><?php echo $result['P_Des'] ?></div>
                                <div class="price">$<?php echo $result['P_Price'] ?>.00</div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <!-- End Of Section Card-1 -->


    <!-- Section Card-2 -->
    <?php
    $sql2 = "SELECT * FROM m_section_2";
    $query2 = mysqli_query($con, $sql2);
    $result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
    ?>
    <section class="card-1">
        <div class="card-1_grid">
            <ul class="card_1-box_2">
                <?php foreach ($result2 as $result2) { ?>
                    <li class="card_1_item">
                        <div class="card_1_subBx">
                            <div class="card_1_imgBx">
                                <img src="../assets/upload/<?php echo $result2['P_Img'] ?>" alt="" />
                                <div class="overlay">
                                    <form action="../controller/CartAction.php" method="POST">
                                        <input type="hidden" name="pId" value="<?php echo $result2['ID'] ?>">
                                        <input type="hidden" name="pImg" value="<?php echo $result2['P_Img'] ?>">
                                        <input type="hidden" name="pName" value="<?php echo $result2['P_Name'] ?>">
                                        <input type="hidden" name="pDes" value="<?php echo $result2['P_Des'] ?>">
                                        <input type="hidden" name="pQty" value="<?php echo $result2['P_Qty'] ?>">
                                        <input type="hidden" name="pPrice" value="<?php echo $result2['P_Price'] ?>">
                                        <button type="submit" name="ordersBtn" class="buy-btn">Buy Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="detail-box">
                                <div class="type">
                                    <h4><?php echo $result2['P_Name'] ?></h4>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="des"><?php echo $result2['P_Des'] ?></div>
                                <div class="price">$<?php echo $result2['P_Price'] ?>.00</div>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="card_1-box_3">
                <div class="cont">
                    <p>editor's collection</p>
                    <h2>ssywear</h2>
                    <a href="#">shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section Card-2 -->


    <!-- Banner-3 -->
    <section class="ban-3"></section>
    <!-- End Of Banner-3 -->


    <!-- Section Card-3 -->
    <?php
    $sql3 = "SELECT * FROM m_section_3";
    $query3 = mysqli_query($con, $sql3);
    $result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
    ?>
    <section class="card-3">
        <div class="card-3_title">flash sale</div>
        <ul id="autoWidth" class="cs-hidden">
            <?php foreach ($result3 as $result3) { ?>
                <li>
                    <div class="box">
                        <div class="card_1_imgBx">
                            <img src="../assets/upload/<?php echo $result3['P_Img'] ?>" alt="" />
                            <div class="overlay">
                                <form action="../controller/CartAction.php" method="POST">
                                    <input type="hidden" name="pId" value="<?php echo $result3['ID'] ?>">
                                    <input type="hidden" name="pImg" value="<?php echo $result3['P_Img'] ?>">
                                    <input type="hidden" name="pName" value="<?php echo $result3['P_Name'] ?>">
                                    <input type="hidden" name="pDes" value="<?php echo $result3['P_Des'] ?>">
                                    <input type="hidden" name="pQty" value="<?php echo $result3['P_Qty'] ?>">
                                    <input type="hidden" name="pPrice" value="<?php echo $result3['P_Price'] ?>">
                                    <button type="submit" name="ordersBtn" class="buy-btn">Buy Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <h4><?php echo $result2['P_Name'] ?></h4>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="des"><?php echo $result2['P_Des'] ?></div>
                            <div class="price">$<?php echo $result2['P_Price'] ?>.00</div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </section>
    <!-- End Of Section Card-3 -->


    <!-- Banner-4 -->
    <section class="ban-4"></section>
    <!-- End Of Banner-4 -->


    <!-- Section Card-4 -->
    <section class="card-4">
        <div class="card-4_grid">
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-1.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">tops</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-2.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">pants</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-3.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">casual</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-4.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">coats</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-5.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">hoodies</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-6.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">slippers</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-1.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">shopes</a>
                </div>
            </div>
            <div class="card-4_imgBx">
                <img src="../assets/img/Men/c-7.jpg" alt="">
                <div class="card-3_overlay">
                    <a href="#">accessories</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Section Card-4 -->


    <!-- Banner-5 -->
    <section class="ban-5"></section>
    <!-- End Of Banner-5 -->



    <!-- Section Card-5 -->
    <?php
    $sql4 = "SELECT * FROM m_section_4";
    $query4 = mysqli_query($con, $sql4);
    $result4 = mysqli_fetch_all($query4, MYSQLI_ASSOC);
    ?>
    <section class="card-5">
        <div class="card-5-title">new arrival</div>
        <div class="card-5_grid">
            <?php foreach ($result4 as $result4) { ?>
                <div class="card-5_box">

                    <div class="card_1_imgBx">
                        <img src="../assets/upload/<?php echo $result4['P_Img'] ?>" alt="" />
                        <div class="overlay">
                            <form action="../controller/CartAction.php" method="POST">
                                <input type="hidden" name="pId" value="<?php echo $result4['ID'] ?>">
                                <input type="hidden" name="pImg" value="<?php echo $result4['P_Img'] ?>">
                                <input type="hidden" name="pName" value="<?php echo $result4['P_Name'] ?>">
                                <input type="hidden" name="pDes" value="<?php echo $result4['P_Des'] ?>">
                                <input type="hidden" name="pQty" value="<?php echo $result4['P_Qty'] ?>">
                                <input type="hidden" name="pPrice" value="<?php echo $result4['P_Price'] ?>">
                                <button type="submit" name="ordersBtn" class="buy-btn">Buy Now</button>
                            </form>
                        </div>
                    </div>

                    <div class="detail-box">
                        <div class="type">
                            <h4><?php echo $result4['P_Name'] ?></h4>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="des"><?php echo $result4['P_Des'] ?></div>
                        <div class="price">$<?php echo $result4['P_Price'] ?>.00</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- End Of Section Card-5 -->


    <!-- Section Card-6 -->
    <section class="card-6">
        <div class="card-6-cont">
            <h2>share your style</h2>
            <p>Phasellus lorem malesuada ligula pulvinar commodo maecenas</p>
        </div>
        <div class="card-6_grid">
            <div class="card-6_box-1">
                <a href="#"><img src="../assets/img/Men/i-1.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-2.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-3.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-4.jpg" alt=""></a>
            </div>
            <div class="card-6_box-2">
                <a href="#"><img src="../assets/img/Men/i-5.jpg" alt=""></a>
            </div>
            <div class="card-6_box-3">
                <a href="#"><img src="../assets/img/Men/i-6.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-7.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-2.jpg" alt=""></a>
                <a href="#"><img src="../assets/img/Men/i-4.jpg" alt=""></a>
            </div>
        </div>
    </section>
    <!-- End Of Section Card-6 -->


    <!-- Banner-6 -->
    <section class="ban-6"></section>
    <!-- End Of Banner-6 -->


    <!-- Section Card-7 -->
    <section class="card-7">
        <div class="card-7_grid">
            <div class="card-7_box-1">
                <img src="../assets/img/c-1.jpg" alt="">
                <a href="#">learn more</a>
            </div>
            <div class="card-7_box-1">
                <img src="../assets/img/c-2.jpg" alt="">
                <a href="#">shop now</a>
            </div>
            <div class="card-7_box-1">
                <img src="../assets/img/c-3.jpg" alt="">
                <a href="#">ask for appointment</a>
            </div>
            <div class="card-7_box-1">
                <img src="../assets/img/c-4.jpg" alt="">
                <a href="#">learn more</a>
            </div>
        </div>
    </section>
    <!-- End Of Section Card-7 -->



    <!-- Footer -->
    <div class="f_container">
        <div class="f_title">
            <h2>Contact</h2>
        </div>
        <div class="f_flex">
            <div class="f_box-1">
                <img src="../assets/img/con-1.webp" alt="">
                <h3>Email Us</h3>
                <a href="#">submit form</a>
            </div>
            <div class="f_box-1">
                <img src="../assets/img/con-2.webp" alt="">
                <h3>Call Us</h3>
                <a href="#">(018)-900-6690</a>
            </div>
            <div class="f_box-1">
                <img src="../assets/img/con-3.webp" alt="">
                <h3>Chat Live</h3>
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="f_grid">
            <div class="footer_box-1">
                <div class="f_form">
                    <p>sign up for newsletter</p>
                    <form action="#">
                        <input type="email" placeholder="Enter the your email address" required>
                        <button type="submit">submit</button>
                    </form>
                </div>
                <div class="f_content">
                    <p>you consent to oue privacy policy and terms & conditions</p>
                </div>
                <div class="f_follow">
                    <p>follow us</p>
                    <div class="f_icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-amazon"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer_box-2">
                <ul>
                    <li>
                        <h2>shop</h2>
                    </li>
                    <li><a href="#">new in</a></li>
                    <li><a href="#">trend</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">bags & accessories</a></li>
                    <li><a href="#">top brans</a></li>
                    <li><a href="#">sale & special offers</a></li>
                    <li><a href="#">lokbook</a></li>
                </ul>
                <ul>
                    <li>
                        <h2>information</h2>
                    </li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">customer service</a></li>
                    <li><a href="#">bnnew collection</a></li>
                    <li><a href="#">best sellers</a></li>
                    <li><a href="#">manufactures</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">terms & condition</a></li>
                </ul>
                <ul>
                    <li>
                        <h2>customer service</h2>
                    </li>
                    <li><a href="#">search terms</a></li>
                    <li><a href="#">advanced search</a></li>
                    <li><a href="#">orders & returns</a></li>
                    <li><a href="#">contact us</a></li>
                    <li><a href="#">theme FAQs</a></li>
                    <li><a href="#">consultant</a></li>
                    <li><a href="#">store location</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End Of Footer -->






    <!-- Search Button -->
    <section class="searchBtn" id="searchBtn">
        <div class="searchBx">
            <form action="#">
                <input type="text" placeholder="Search...">
            </form>
        </div>
    </section>






    <!-- Shopping cart Button -->
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
                                <a href="../controller/CartAction.php?id2=<?php echo $result5['ID'] ?>"><i class="fas fa-trash"></i></a>
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


    <!-- Vertical Social Icon -->
    <section class="social-icon">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fab fa-amazon"></i></a></li>
        </ul>
    </section>





    <script>
        $(document).ready(function() {


            // trend open button
            $(".tBtn").click(function() {
                $(".trendBtn").toggleClass("show")
            });

            // collection open button
            $(".cBtn").click(function() {
                $(".collection").toggleClass("show")
            });

            // new-in open button
            $(".nBtn").click(function() {
                $(".newInBtn").toggleClass("show")
            });

            // blog open button
            $(".bBtn").click(function() {
                $(".blogbtn").toggleClass("show")
            });

            // lookbook open button
            $(".lBtn").click(function() {
                $(".lookBtn").toggleClass("show")
            });

            //shopping page open button
            $(".spBtn").click(function() {
                $(".shopBtn").toggleClass("show")
            });

            // shopping card close button
            $(".s-card_close").click(function() {
                $(".s-card").toggleClass("show")
            });

            // shoppping card open button
            $(".sBtn").click(function() {
                $(".s-card").toggleClass("show")
            });



            // carsouel
            $('#autoWidth').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });

            // shopping cart item number
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


            // scroll-up button
            $(".scroll-up_btn").click(function() {
                $('html').animate({
                    scrollTop: 0
                });
                $('html').css("scrollBehavior", "auto");
            });



            $(window).scroll(function() {
                // navbar-2
                if (this.scrollY > 20) {
                    $('.nav-2').addClass("show");
                } else {
                    $('.nav-2').removeClass("show");
                }

                // shopping cart
                if (this.scrollY > 20) {
                    $('.s-card').addClass("active");
                } else {
                    $('.s-card').removeClass("active");
                }

                // scroll-up
                if (this.scrollY > 20) {
                    $('.scroll-up_btn').addClass("active");
                } else {
                    $('.scroll-up_btn').removeClass("active");
                }

                // navbar-2 buttons
                if (this.scrollY > 10) {
                    $('.trendBtn,.collection,.newInBtn').addClass("active");
                } else {
                    $('.trendBtn,.collection,.newInBtn').removeClass("active");
                }
            });


            // quantity change 
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

        // search open button
        function toggle() {
            var btn = document.getElementById("searchBtn")
            btn.classList.toggle('active')
        }
    </script>


</body>

</html>