<?php include_once('header.php'); ?>
<div class="wrapper">
    <div class="login">
        <div class="login-form">
            <h1 class="login-title">HOME</h1>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo " <p>Hello " . $_SESSION["useruid"] . "</p><br>";
            }
            ?>
            <div class="form-wrapper">
                <form name="myForm">
                    <div class="action-help">
                        <p>Hello Welcome to IOT Platform</p>
                        <br>
                    </div>
                    <div class="actions">
                        <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<a class='action' href='control.php'>Led Dashboard</a>";
                            echo "<a class='action' href='weather.php'>Weather Dashboard</a>";
                            echo "<a class='action' href='includes/logout.inc.php'>Log Out</a>";
                        } else {
                            echo "<a class='action' href='login.php'>Login</a>";
                        }
                        ?>
                </form>
            </div>

        </div>
    </div>
    <div class="login-decoration">
    </div>
</div>
</div>
<?php include_once('footer.php');
