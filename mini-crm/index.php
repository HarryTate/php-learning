<?php

require_once('includes/header.php');



?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Date Registered</th>

                </tr>

                <?php
                foreach ($dbn->getAllUsers() as $data) { ?>
                    <tr>
                        <td><?php echo  $data->uid; ?></td>
                        <td><?php echo $data->firstname; ?></td>
                        <td><?php echo $data->lastname; ?></td>
                        <td><?php echo date_format(date_create($data->dob), "d/m/Y"); ?></td>
                        <td><?php echo $data->dateregistered ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php
require_once('includes/footer.php');
