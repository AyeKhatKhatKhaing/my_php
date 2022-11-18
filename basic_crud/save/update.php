<?php
require_once "conn.php";
$id=$_GET['id'];
echo ($id);

$sql="SELECT * FROM to_do WHERE id=$id";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($query);
if(isset($_GET['updateBtn'])){
    $message=$_GET['message'];
    $id=$_GET['id'];
    $updateSql="UPDATE to_do SET message='$message' WHERE id=$id";
    if(mysqli_query($conn,$updateSql)){
        header("location:read.php");
    }
    else{
        echo "Update error".mysqli_error($conn);
    }
}
?>

<form action="">
    <input type="text" name="id" value="<?php echo $id?>" hidden>
    <input type="text" name="message" value="<?php echo $row['message']; ?>" required>
    <button name="updateBtn">Update</button>
</form>