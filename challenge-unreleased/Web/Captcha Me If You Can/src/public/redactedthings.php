<?php

session_start();

if($_SESSION["counter"] < 300){
    header("Location: index.php");
}

echo "<script>alert('Anda telah benar sebanyak 300 kali!')</script>";
echo "<script>alert('Ini Flagnya!')</script>";
echo "FindITCTF{Y0uR3_G0nN4_H4vE_T0_C4ptchA_m3_f1R5t!}";

?>

<!-- create a return button -->
<br>
<a href="index.php">Return</a>