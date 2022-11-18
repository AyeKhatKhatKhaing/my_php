<?php
require_once 'base.php';?>


<table class="table table-hover  mt-3">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Control</th>
    </tr>
    </thead>
    <tbody>
<?php
$sql="SELECT * FROM contact ORDER BY id DESC ";
$query=mysqli_query(con(),$sql);
while ($row=mysqli_fetch_assoc($query)){
    ?>

    <tr  class="contact" id="l<?php echo $row['id']?>" >
        <td data-toggle="modal" data-target="#staticBackdrop"><?php  echo $row['id'] ?></td>
        <td data-toggle="modal" data-target="#staticBackdrop"><?php  echo $row['name'] ?></td>
        <td data-toggle="modal" data-target="#staticBackdrop"><?php  echo $row['phone'] ?></td>
        <td>
            <button class="btn btn-outline-secondary btn-sm edit" data-id="<?php echo $row['id']?>"><i class="fas fa-pen"></i></button>
            <button class="btn btn-outline-danger btn-sm del" data-id="<?php echo $row['id']?>"><i class="fas fa-trash"></i></button>
        </td>
    </tr>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="text-muted"><?php echo $row['phone'] ?></p>
                    <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Contact Details</p>
                    <p class="text-muted"><i class="fas fa-phone text-muted mr-5"></i><?php echo $row['phone'] ?> (<?php echo $row['name'] ?>)</p>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
    </tbody>
    </table>

