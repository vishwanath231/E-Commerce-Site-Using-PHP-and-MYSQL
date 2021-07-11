<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/Form.css">
    <link rel="stylesheet" href="../assets/font/css/all.css">
</head>

<body>


    <!-- Navbar -->
    <?php
    include "KidNavbar.php";
    ?>

    <div class="container">
        <div class="formBx">
            <div class="form_title">Sign In</div>
            <div class="social-media" style="margin-bottom: 2rem;">
                <div class="facebook">
                    <img src="../assets/img/facebook.png" alt="">
                    <a href="">facebook</a>
                </div>
                <div class="google">
                    <img src="../assets/img/google.png" alt="">
                    <a href="">google</a>
                </div>
            </div>

            <!-- ERROR MSG -->
            <?php if (isset($_SESSION['errMsg'])) { ?>
                <div class="error" id="closeMsg">
                    <p><?php echo $_SESSION['errMsg']; ?></p>
                    <i class="fas fa-times-circle" id="close"></i>
                </div>
            <?php
                unset($_SESSION['errMsg']);
            }
            ?>


            <!-- SUCESS MSG -->
            <?php if (isset($_SESSION['sucMsg'])) { ?>
                <div class="success" id="closeMsg">
                    <p><?php echo $_SESSION['sucMsg']; ?></p>
                    <i class="fas fa-times-circle" id="close"></i>
                </div>
            <?php
                unset($_SESSION['sucMsg']);
            }
            ?>

            <form action="../controller/Form.php" method="POST" class="form">
                <div class="form_div">
                    <input type="email" name="email" class="form_input" placeholder=" " required>
                    <label class="form_label">Email</label>
                </div>
                <div class="form_div">
                    <input type="password" name="pass" class="form_input" id="pass" placeholder=" " required>
                    <label class="form_label">Password</label>
                    <i class="far fa-eye" onclick="showPass()"></i>
                </div>
                <button type="submit" name="kLogin" class="form_btn">login</button>
            </form>
            <div class="f_pass">
                <a href="#">forgot password</a>
            </div>
            <div class="reg_form">
                <p>don't have account! <a href="KidSignUp.php">Sign Up Here</a></p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php
    include "Footer.php";
    ?>



    <script>
        // When you click close icon errMsg & SuccessMsg hidden
        document.getElementById("close").addEventListener("click", closeMessage);

        function closeMessage() {
            document.getElementById("closeMsg").style.display = "none";
        }


        // errMsg & Success Msg set time out 
        function showTime() {
            setTimeout(() => {
                document.getElementById("closeMsg").style.display = "none";
            }, 15000);
        }
        showTime();


        // password Show & hide
        function showPass() {

            var password = document.getElementById("pass");
            var icon = document.querySelector(".fa-eye");

            if (password.type === "password") {
                password.type = "text";
                icon.style.color = '#8463D8';
                icon.classList.add("fa-eye-slash")
            } else {
                password.type = "password";
                icon.style.color = 'gray';
                icon.classList.remove("fa-eye-slash")
            }
        }
    </script>

</body>

</html>