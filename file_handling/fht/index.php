<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="write.php" method="POST">
        <label for="name">User Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">User password</label>
        <input type="password" name="password" id="password">
        <br>
        <button>submit</button>
    </form>

    <ul>

        <?php
    
            $list=scandir("store");
            foreach($list as $key=>$l){
                if($l=="." || $l==".."){
                    continue;
                }
?>
        <li>
            <a href="delete.php?name=<?php echo $l; ?>">Delete</a>
            <a href="store/<?php echo $l; ?>"><?php echo $key." ".$l; ?></a>
        </li>
        <?php
            }
        ?>
    </ul>
</body>

</html>