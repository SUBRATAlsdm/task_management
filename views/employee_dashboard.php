<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $username;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="padding: 20px;">
    <center><h2>Employee Dashboard</h2></center>

    <!-- Display employee's tasks -->
    <div style="display: flex; flex-direction: row; justify-content: space-between;">
        <h3><?php echo "Name: ".$username?></h3>
        <form action="<?= base_url('index.php/login/logout'); ?>" method="post">
            <input type="submit" value="Logout">
        </form>
    </div>
    <h3><?php echo "Designation: ".$user_designation?></h3>
    <h3>Your Tasks</h3>
    <div style="padding: 20px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Deadline</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['title']; ?></td>
                        <td><?= $task['description']; ?></td>
                        <td><?= $task['deadline']; ?></td>
                        <td><?= $task['status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    

</body>
</html>
