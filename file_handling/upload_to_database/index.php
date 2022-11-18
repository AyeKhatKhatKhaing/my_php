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
        margin: 10px;
        border: 1px solid black;
    }

    .photo-box {
        border: 1px solid black;
        display: inline-block;
    }
    </style>
</head>

<body>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <label for="">Multiple Upload</label>
        <br>
        <br>
        <input type="file" name="upload[]" multiple>
        <button>Upload</button>
    </form>
    <h1>Uploaded photo</h1>

    <div class="show-photo">
        <?php
        $conn=mysqli_connect("localhost","root","","my_list");
        $sql="SELECT * FROM photos";
        $query=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($query)){
            ?>

        <div class="photo-box">
            <img src="<?php echo $row['photo_link']; ?>" alt="">
            <a href="delete.php?name=<?php echo $row['photo_link'];?>">Delete</a>
        </div>

        <?php
        
        
    }
        ?>
    </div>
</body>

</html>