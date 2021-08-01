<?php include_once('header.php'); ?>
<div class="wrapper">
    <div class="login">
        <div class="login-form">
            <h1 class="login-title">Sign Up</h1>
            <div class="form-wrapper">
                <form name="myForm" action="includes/signup.inc.php" method="post">
                    <div class="input-wrapper">
                        <label class="label" for="name">Name</label>
                        <input class="input" type="text" id="name" name="name" value="">
                    </div>
                    <div class="input-wrapper">
                        <label class="label" for="email">Email</label>
                        <input class="input" type="text" id="email" name="email" value="">
                    </div>
                    <div class="input-wrapper">
                        <label class="label" for="email">Username</label>
                        <input class="input" type="text" id="uid" name="uid" value="">
                    </div>
                    <div class="input-wrapper">
                        <label class="label" for="password">Password</label>
                        <input class="input" type="password" id="pwd" name="pwd" value="">
                    </div>
                    <div class="input-wrapper">
                        <label class="label" for="password">Repeat Password</label>
                        <input class="input" type="password" id="pwdrepeat" name="pwdrepeat" value="">
                    </div>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p style='colour:red;'>Fill in all Fields</p>";
                        } else if ($_GET["error"] == "invaliduid") {
                            echo "<p style='colour:red;'>Choose a proper Username</p>";
                        } else if ($_GET["error"] == "invalidemail") {
                            echo "<p style='colour:red;'>Invalid Email</p>";
                        } else if ($_GET["error"] == "passwordsdontmatch") {
                            echo "<p style='colour:red;'>The Passwords Dont Match</p>";
                        } else if ($_GET["error"] == "usernametaken") {
                            echo "<p style='colour:red;'>Username Already Exists</p>";
                        } else if ($_GET["error"] == "stmtfailed") {
                            echo "<p style='colour:red;'>Something Went Wrong</p>";
                        } else if ($_GET["error"] == "none") {
                            echo "<p style='colour:green;'>You Have Signed Up successfully</p>";
                        }
                    }
                    ?>
                    <br>
                    <p>Click here to <a href="login.php">Log In</a></p>
                    <br>
                    <div class="actions">
                        <button id="submit" class="action" type="submit" name="submit">Sign Up</button>
                </form>
            </div>

        </div>
    </div>
    <div class="login-decoration">
    </div>
</div>


<?php include_once('footer.php'); ?>