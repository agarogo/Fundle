<?php
    session_start();
	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
    
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "firstname" => $user['firstname'],
            "name" => $user['name'],
            "phone" => $user['phone'],
            "gmail" => $user['gmail']
        ];

        header('Location: prof.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: sign.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
