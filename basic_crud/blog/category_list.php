<?php
include('template/header.php');

?>

<link rel="stylesheet"
    href="<?php echo $url; ?>/template/core/assets/vendor/bootstrap/css/dataTables.bootstrap5.min.css">

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4 ">
                <li class="breadcrumb-item"><a href="<?php echo $url;?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category List</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <i class="feather-list  text-primary h4 mr-2"></i>
                        <h4 class="mb-0">Category List</h4>
                    </div>
                    <div class="">
                        <a href="#" class="feather-maximize-2 btn btn-outline-secondary full-screen-btn"></a>
                        <a href="<?php echo $url;?>/category_create.php"
                            class="feather-plus-circle btn btn-outline-primary"></a>
                    </div>
                </div>
                <hr>
                <div class="list-table bg-white">
                    <h1 class="text-center">Full page card</h1>
                    <table id="example" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Catebory Name</th>
                                <th>Control</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            foreach (categoryList() as $row) {  
                            $time=date('g:i',strtotime($row['created-at']));
                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td>
                                    <a class="btn btn-sm feather-trash btn-danger"
                                        href="category_delete.php?id=<?php echo $row['id']; ?>"></a>
                                    <a class="btn btn-sm feather-edit btn-warning"
                                        href="category_update.php?id=<?php echo $row['id']; ?>"></a>
                                </td>
                                <td><?php echo $time; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('template/footer.php');
?>
<script src="<?php echo $url; ?>/template/core/assets/js/dashboard.js"></script>