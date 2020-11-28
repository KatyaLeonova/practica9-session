
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    if($_SESSION['auth']==true)
    {
        ?>
        <p style="font-size:20px; font-weight:700; color:#32CD32">Password and login are TRUE!!!<br>
        You are logged in to the system!!!!<br>
        </p>
        <?php
    }
    else
    {
        ?>
        <p style="font-size:20px; font-weight:700; color:#FF0000">Password OR login are FALSE!!<br>
        <a href="login.php" style="color:#FF0000">Go to Form-></a></p>
        <?php
    }
?>


</body>
</html>