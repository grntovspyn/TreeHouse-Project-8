<?php
require_once 'inc/bootstrap.php';
requireAdmin();
$pageTitle = "Admin | Time Tracker";
$page = "admin";
$ctask = new App\Model\Task;
$user = new App\Model\User;
if (request()->get('id')) {
    list($task_id, $task, $status) = $ctask->getTask(request()->get('id'));

}

include 'inc/header.php';
?>

<div class="section page">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">
            <h2>Admin</h2>
                <div class="panel">
                    <h4>Users</h4>
                    <table class ="table table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Registered</th>
                                <th>Promote/Demote</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($user->getAllUsers() as $users) { ?>
                                <tr>
                                    <td><?php echo $users['username']; ?></td>
                                    <td><?php echo date("F jS, Y", strtotime($users['created_at'])); ?></td>
                                    <td>
                                        <?php if (isOwner($users['id'])) { ?>
                                            <span class="btn btn-xs btn-info disabled" >Current User</span>
                                        <?php } else { ?>
                                            <?php if($users['role_id'] == 1) { ?>
                                                <a href="inc/adjustRole.php?roleId=2&userId=<?php echo $users['id']; ?>"class="btn btn-xs btn-success">Promote to Admin</a>
                                            <?php } elseif($users['role_id'] == 2) { ?>
                                                <a href="inc/adjustRole.php?roleId=1&userId=<?php echo $users['id']; ?>"class="btn btn-xs btn-warning">Demote to General User</a>
                                            <?php } ?>
                                        <?php } ?>
                                        
                                    </td>                                
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>
