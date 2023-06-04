<?php
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijkl';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picture Multiplier</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <div>
        <form action="" method="post" enctype="multipart/form-data">
            <label class="file-label" for="file">Upload an image under 500kb(.png) and I will multiply your image with my secret image</label>
            <input type="file" class="file-input" name="file" id="file">
            <input type="submit" class="file-submit "value="Save" name="submit">
        </form>

        <?php
            if(isset($_POST['submit'])){
                $dir = "files";
                $file_name = basename($_FILES['file']['name']);
                $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $file_size = $_FILES['file']['size'];
                $upload_file = $_FILES['file']['tmp_name'];
                $random_name = generateRandomString(30);
                $new_name = $random_name.'.'.$file_type;

                if($file_name=='') {
                    echo 'You don\'t choose an Image to upload';
                }
                else {
                    if($file_type!='png'){
                        echo 'file must be a picture with .jpg .jpeg';
                    }
                    else {
                        if ($file_size > 500000) {
                            echo 'the picture cannot exceed 500kb';
                        }
                        else {
                            move_uploaded_file($upload_file, $dir.'/'.$new_name);
                            
                            shell_exec("python3 a.py $new_name");
                            $result = $_GET['res.jpg'];
                        }
                    }
                }
            }
        ?>
        <img src="res.jpg" alt="Result Image">
        </div>
    </div>
</body>
</html>