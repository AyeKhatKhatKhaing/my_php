<?php
require_once "conn.php";

if(isset($_GET['addBtn'])){
    $message=$_GET['message'];
    $sql="INSERT INTO to_do (message) VALUES ('$message')";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:create.php");
    }
    else{
        echo "Insert Failed";
    }
}
?>
<form method="get">
    <input type="text" name="message">
    <button name="addBtn">Add</button>
</form>