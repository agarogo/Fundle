<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
    	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
        $user_id = $_SESSION['user']['id'];
                            
        $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = $user_id");
        $user = mysqli_fetch_all($res);
        
        
$id = ($user[0][0]);
$gmail = $_POST['gmail'];





mysqli_query($connect, "UPDATE `users` SET `gmail` = '$gmail' WHERE `id` = '$id'");
header('Location: pro.php');
$to = 'ampit.site@ampit.site';
$from = trim($_POST['gmail']);
$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);

$headers = "From: $from" . "\r\n" .
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/" . phpversion();


?>