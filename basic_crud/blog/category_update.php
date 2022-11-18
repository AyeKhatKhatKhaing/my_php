<?php
include('template/header.php');
?>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <i class="feather-plus-circle  text-primary h4 mr-2"></i>
                        <h4 class="mb-0">Add Category</h4>
                    </div>
                    <a href="<?php echo $url;?>/item_list.php" class="feather-list btn btn-outline-primary"></a>
                </div>
                <hr>

                <?php
$id=$_GET['id'];
$sql="SELECT * FROM to_do WHERE id=$id";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($query);
if(isset($_GET['updateBtn'])){
    categoryUpdate();
}
?>
                <form action="">
                    <div class="form-inline">
                        <input class="form-control w-50" type="text" name="id" value="<?php echo $id?>" hidden>
                        <input class="form-control" type="text" name="message" value="<?php echo $row['message']; ?>"
                            required>
                        <button class="btn btn-secondary ml-2" name="updateBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('template/footer.php');
?>
<script src="<?php echo $url; ?>/template/core/assets/js/dashboard.js"></script>