<?php
require_once 'conn.php';
require_once 'base.php';

function categoryList(){
    global $conn;
    $sql="SELECT * FROM to_do ORDER BY id DESC";
    $query=mysqli_query($conn,$sql);
    $total= mysqli_num_rows($query);
    $rows=[];
    while($row=mysqli_fetch_assoc($query)){
    array_push($rows,$row);
}
return $rows;
}

function categoryCreate(){
    global $conn;
    $message=$_GET['message'];
    $sql="INSERT INTO to_do (message) VALUES ('$message')";
    if(mysqli_query($conn,$sql)){
        echo "<script>location.href='category_create.php'</script>";
    }
}

function categoryUpdate(){
    global $conn;
    global $id;
    $message=$_GET['message'];
    $updateSql="UPDATE to_do SET message='$message' WHERE id=$id";
    if(mysqli_query($conn,$updateSql)){
        echo "<script>location.href='category_list.php'</script>";
    }
    else{
        echo "Update error".mysqli_error($conn);
    }
}

function categoryDelete(){
    global $conn;
    $id=$_GET['id'];
    $sql="DELETE FROM to_do WHERE id={$id}";
    if(!mysqli_query($conn,$sql)){
        echo "delete fail!".mysqli_error();
    }
    else{
        echo "<script>location.href='category_list.php'</script>";
    }
}
?>