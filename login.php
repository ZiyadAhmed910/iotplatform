<?php include_once('header.php'); ?>
<div class="wrapper">
    <div class="login">
        <div class="login-form">
            <h1 class="login-title">Log In</h1>
            <div class="form-wrapper">
                <form name="myForm" action="includes/login.inc.php" method="post">
                    <div class="input-wrapper">
                        <label class="label" for="email">Username</label>
                        <input class="input" type="text" id="uid" name="uid" value="">
                    </div>
                    <div class="input-wrapper">
                        <label class="label" for="password">Password</label>
                        <input class="input" type="password" id="pwd" name="pwd" value="">
                    </div>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<br><p style='colour:red;'>Fill in all Fields</p>";
                        } else if ($_GET["error"] == "wronglogin") {
                            echo "<br><p style='colour:red;'>Incorrect Login Info</p>";
                        }
                    }
                    ?>
                    <br>
                    <p>Click here to <a href="signup.php">Sign Up</a></p>
                    <br>
                    <div class="actions">
                        <button id="submit" class="action" type="submit" name="submit">Log In</button>
                </form>
            </div>

        </div>
    </div>
    <div class="login-decoration">
    </div>
</div>
<?php include_once('footer.php');
