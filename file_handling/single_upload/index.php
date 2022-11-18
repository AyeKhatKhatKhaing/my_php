<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .show-photo {}

    .show-photo img {
        width: 150px;
        height: 150px;
    }
    </style>
</head>

<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label for="">Single Upload</label>
        <br>
        <br>
        <input type="file" name="upload">
        <button>Upload</button>
    </form>
    <h1>Uploaded photo</h1>

    <div class="show-photo">
        <?php
        $files=scandir("store/");
        foreach($files as $key => $file){
            ?>
        <img src="store/<?php echo $file; ?>" alt="">
        <?php
        }

        ?>
    </div>
</body>

</html>