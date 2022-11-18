<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
        }

        .images {
            width: 90%;
            margin: 20px auto;
            columns: 3 250px;
            column-gap: 20px;
        }

        .card {
            width: 100%;
            height: 400px;
            margin-bottom: 10px;
            background-color: black;
            color: white;
        }

        .image {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="images" id="images">
        <p id="condition"></p>
    </div>

</body>
<script>
    let con = document.getElementById("condition");
    con.innerHTML = "Loading...";
    <?php echo aa; ?>
</script>
</html>