<?php
include('template/header.php');
?>
<h1>This is home page of <?php echo ($info['name']);?></h1>
<pre>
    <?php 
    print_r($_SERVER);
    ?>
</pre>
<?php
include('template/footer.php');
?>