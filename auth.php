<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
   $_SESSION["login"]='admin';
    $_SESSION["password"]='1111';
    $_SESSION['auth']='';
    if (isset($_POST['done'])) {
        
    $_SESSION["input_login"]=$_POST["login"];
    $_SESSION["input_pass"]=$_POST["pass"];
    
 
	// Если логин пуст, тогда выводит сообщение
	if ($_POST['login'] == $_SESSION["login"] && $_POST['pass']==$_SESSION["password"]) {
        $_SESSION['auth']=true;
        header('Location: restricted.php');
	}
        else
            $_SESSION['auth']=false;
            header('Location: restricted.php');
    }
    
?>


</body>
</html>
