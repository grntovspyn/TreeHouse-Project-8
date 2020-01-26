<?php
require_once 'inc/bootstrap.php';

$pageTitle = "Login | Time Tracker";
$page = 'login';

include 'inc/header.php';
?>
<div class="col-container page-container">
    <div class="col col-70-md col-60-lg col-center">
        <h2 class="form-signin-heading">Please sign in</h2>

        <form class="form-container" method="post" action="/inc/doLogin.php">
            <table class="items">
                <tr>
                    <th><label for="inputUsername" class="sr-only">Username</label></th>
                    <td><input type="username" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus></td>
                </tr>
                <tr>
                    <th><label for="inputPassword" class="sr-only">Password</label></th>
                    <td><input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required></td>
                </tr>
            </table>
            <input class="button button--primary button--topic-php" type="submit" value="Sign In" />
        </form>
    </div>
</div>

<?php include("inc/footer.php"); ?>
