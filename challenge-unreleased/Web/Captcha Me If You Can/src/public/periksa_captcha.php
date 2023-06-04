<?php
    session_start();
    // Validate the captcha
    if ($_POST["nilaiCaptcha"] != $_SESSION["Captcha"]) {
        echo "<script>alert('Captcha Salah!')</script>";
    } else {
        // Increment the counter
        $_SESSION["counter"]++;

        if($_SESSION["counter"] >= 300){
            header("Location: redactedthings.php");
        }
    }
    header("refresh:0;url=index.php");
?>