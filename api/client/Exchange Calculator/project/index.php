<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>MM Exchange</title>
    <meta name="title" content="MM Exchange">
    <meta name="description" content="Testing for my web designing skills ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mmsit/">
    <meta property="og:title" content="MM Exchange">
    <meta property="og:description" content="Testing for my web designing skills ">
    <meta property="og:image" content="./images/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mmsit/">
    <meta property="twitter:title" content="MM Exchange">
    <meta property="twitter:description" content="Testing for my web designing skills ">
    <meta property="twitter:image" content="./images/logo.png">
    <title>Exchange Calculator</title>
    <link rel="icon" href="./images/logo.svg" type="image/icon type">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/night-mood.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css" />
</head>

<body>
    <section class="app animate__animated animate__slideInDown">
        <div class="output-container">
            <div class="brand-container">
                <img src="./images/logo.svg" class="logo">
                <p class="brand">MMEx</p>
            </div>
            <div class="result-container">
                <p class="result" id="result">00.0</p>
            </div>
        </div>
        <div class="divider"></div>
        <form class="calc" id="calc">
            <div class="input-container required-input">
                <label>Input</label>
                <input type="number" class="input" id="input" placeholder="00.0" min="1" autofocus required>
            </div>
            <div class="from-container required-input">
                <label>From</label>
                <select id="from" class="from" required>
                    <option value="" selected>Choose currency</option>
                </select>
            </div>
            <div class="to-container required-input">
                <label>To</label>
                <select id="to" class="to" required>
                    <option value="" selected>Choose destination</option>
                </select>
            </div>
            <div class="calculate-container required-input">
                <button class="calc-btn" id="calc-btn">Calculate</button>
            </div>
        </form>
        <div class="history-container">
            <table class="history">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody id="history-list">
                </tbody>
            </table>
        </div>
    </section>
    <button class="mode-change animate__animated animate__slideInUp" onclick="changeMode()">
        <i class="fas fa-moon" id="mode-icon"></i>
    </button>
    <script>
        <?php
        $x=file_get_contents('https://forex.cbm.gov.mm/api/latest');
        ?>
        let data=<?php echo $x; ?>
    </script>
    <script src="./js/app.js"></script>
</body>

</html>