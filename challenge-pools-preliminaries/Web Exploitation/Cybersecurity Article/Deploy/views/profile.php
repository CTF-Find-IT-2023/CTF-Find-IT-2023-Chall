<?php
$bool = FALSE;
if($_SERVER['REQUEST_METHOD'] === "HEAD"){
    header("4th_part_flag: ".base64_encode("3xplo1tat1on_r1ght?}"));
}
else if($_SERVER['REQUEST_METHOD'] === "OPTIONS"){
    $bool=TRUE;
    // header("3rd_part_flag: ".base64_encode("r36ul4R_w3b_ Note: for the 4th part i think u should HEAD to this page"));
}
else{
    header("2nd_part_flag: ".base64_encode("ju5t_s0me_ Note: for the 3rd part maybe this page have some OPTIONS to you!"));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Congrats!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand">Congratulation Page</a>
</nav>

<div class="container mt-3">
    <h1>Congrats!</h1>
    <p>Now this is the start of the real journey!</p>
    <p>Goodluck!</p>
</div>

<!-- 1st part: <?php echo base64_encode("FindITCTF{")?> -->

<?php if($bool === TRUE){
    echo "<!-- 3rd part: ";
    echo base64_encode("r36ul4R_w3b_ Note: for the 4th part i think u should HEAD to this page");
    echo " -->";
}
?>

</body>
</html>
