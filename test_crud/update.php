<?php
require_once "conn.php";
$id=$_GET['id'];
echo $id;
$sql="SELECT * FROM to_do WHERE id=$id";
$query=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($query);
// echo "<pre>";
// print_r($rows);
$message=$rows['message'];

if(isset($_GET['updateBtn'])){
    $message=$_GET['message'];
    $sql="UPDATE to_do SET message ='$message' WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("location:read.php");
    }
}

?>
<form method="get">
    <input type="text" name="id" value="<?php echo $id?>" hidden>
    <input type="text" name="message" value="<?php echo $message; ?>">
    <button name="updateBtn">Update</button>
</form>