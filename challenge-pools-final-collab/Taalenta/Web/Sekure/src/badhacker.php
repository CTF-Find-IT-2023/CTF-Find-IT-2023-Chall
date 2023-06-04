<!DOCTYPE html>
<html>
<head>
    <title>Badhacker</title>
    <style>
        .big-text {
            font-size: 48px;
            font-weight: bold;
            text-align: center;
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <div class="big-text">
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<h1>BADHACKERR!!!</h1>";
        echo "<h1>your name is $name</h1>";
    } else {
        echo "<h1>BADHACKERR!!!</h1>";
        echo "<h1>No name provided.</h1>";
    }
    ?>
    </div>
</body>
</html>
