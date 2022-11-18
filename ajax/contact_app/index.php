<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>

    </style>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card my-5 shadow">
                <div class="card-content">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <h4>Contact App</h4>
                        <div>
                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#add">Add contact</button>
                            <button class="btn btn-outline-info" id="listBtn" onclick="showList()"><i class="fas fa-list"></i></button>
                            <button class="btn btn-outline-success" id="gridBtn" onclick="showGrid()"><i class="fas fa-th-large"></i></button>
                        </div>
                    </div>
                    <div class="output">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="add" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new content <span id="result"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="save.php" method="post" id="add_content">
                    <div class="form-row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Contact name</label>
                                <input type="text" name="name">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit content <span id="editResult"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="post" id="update_content">
                    <input type="hidden" name="id" id="editId">
                    <div class="form-row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Contact name</label>
                                <input type="text" name="name" id="ename">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" id="ephone">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/app.js"></script>
</body>
</html>