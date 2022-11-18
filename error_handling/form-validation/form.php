<?php 
session_start();
require_once 'base.php'
?>
<?php require_once 'function.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="my-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase">Register Form</h4>
                            <hr>
                            <?php 
                            if(isset($_POST['reg'])){
                                register();
                            }
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="<?php echo old('name') ?>">
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('name') ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        value="<?php echo old('email') ?>">
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('email') ?>
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="<?php echo $g ?>">Gender</label>
                                    <div class="border border-faded rounded p-2">
                                        <?php foreach($gender as $g){?>
                                        <div class="form-check form-check-inline text-nowrap">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="<?php echo $g ?>" value="<?php echo $g ?>"
                                                <?php echo (old('gender')==$g) ? "checked":"" ?>>
                                            <label class="form-check-label text-capitalize"
                                                for="inlineRadio1"><?php echo $g ?></label>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('gender') ?>
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        value="<?php echo old('phone') ?>">
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('phone') ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="address">address</label>
                                    <textarea type="text" id="address" name="address" class="form-control"
                                        value=""><?php echo old('address') ?></textarea>
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('address') ?>
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="<?php echo $s ?>">Your Skill</label>
                                    <div class="border border-faded rounded p-2">
                                        <?php foreach($skillArr as $s){?>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="<?php echo $s ?>"
                                                value="<?php echo $s ?>" name="skill[]" <?php 
                                                    if(old('skill')){
                                                        echo in_array($s,old('skill')) ? 'checked':'';  } 
                                                ?>>

                                            <label class="form-check-label"
                                                for="inlineCheckbox1"><?php echo $s ?></label>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('skill') ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="upload">upload</label>
                                    <input type="file" id="upload" name="upload" class="form-control p-1"
                                           value="<?php echo old('upload') ?>">
                                    <small class="text-danger font-weight-bold">
                                        <?php getError('upload') ?>
                                    </small>
                                </div>

                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="">
                                        <input type="checkbox" required class="custom-checkbox" checked>
                                        <label for="">All correct</label>
                                    </div>
                                    <button class=" btn btn-primary" name="reg">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">

            </div>
        </div>
    </div>
    <?php clearError() ?>
</body>

</html>