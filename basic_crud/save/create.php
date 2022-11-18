<?php
require_once "conn.php";
if(isset($_GET['submit'])){
    echo"<pre>";

    $message=$_GET['message'];
    $sql="INSERT INTO to_do (message) VALUES ('$message')";
    if(mysqli_query($conn,$sql)){
        header('location:create.php');
    }
    echo "</pre>";
}
include "nav.php";
?>


<form action="">
    <input type="text" name="message" required>
    <button name="submit">Add</button>
</form>