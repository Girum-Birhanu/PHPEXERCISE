<?php
session_start();
?>

<html>
    <body>
        <?php
        $_SESSION["user"]="Girum";
        echo "session information are set successfully.<br/>";
        
        ?>
        <a href="session2.php">visit next page</a>
    </body>
</html>