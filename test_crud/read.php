<?php
require_once "conn.php";
$sql="SELECT * FROM to_do";
$query=mysqli_query($conn,$sql);
echo "<pre>";
$total=mysqli_num_rows($query);

echo "<ul>";
while($row=mysqli_fetch_assoc($query)){
    echo "<li>{$row['id']}-{<a href='delete.php?id={$row['id']}'>Delete</a>}-{<a href='update.php?id={$row['id']}'>Update</a>}-{$row['message']}</li>";
}
echo "</ul>";

?>