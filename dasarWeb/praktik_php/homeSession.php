<html>
    <head></head>
    <body>
        <?php
            session_start();

            if($_SESSION['status'] == 'login'){
                echo "Selamat datang " . $_SESSION['username'];
        ?>
                <a href="sessionLogout.php">Log Out</a>
        <?php
            } else {
                echo "Anda belum login. Silakan ";
        ?>
                <a href="sessionLoginForm.html">Log In</a>
        <?php
            }
        ?>
    </body>
</html>
