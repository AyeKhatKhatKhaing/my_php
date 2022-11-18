<div class="card-columns">

            <?php
            require_once 'base.php';
            $sql="SELECT * FROM contact ORDER BY id DESC ";
            $query=mysqli_query(con(),$sql);
            while ($row=mysqli_fetch_assoc($query)){
                ?>
        <div class="card contact" id="g<?php echo $row['id']?>">
            <div class="card-body">
                    <div class="text-center">
                        <h4><?php  echo $row['name'] ?></h4>
                        <p><?php  echo $row['phone'] ?></p>

                            <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-pen"></i></button>
                            <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>

                    </div>
            </div>
        </div>
                <?php } ?>

</div>