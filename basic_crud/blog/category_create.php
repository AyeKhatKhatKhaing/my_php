<?php
include('template/header.php');
?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url;?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url;?>/category_list.php">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
            </ol>
        </nav>
    </div>
</div>
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
                if(isset($_GET['submit'])){
                    categoryCreate();
                }
                
                ?>
                <form action="">
                    <div class="form-inline">
                        <input type="text" name="message" class="form-control" required>
                        <button name="submit" class="btn btn-primary ml-2">Add</button>
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