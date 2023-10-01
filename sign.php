<?php
	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
	
	if (!$connect) {
	    die('Error connect');
	}
	
?>
<?php
	session_start();
	if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fundle</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="main.css">
	<header>
		<style>
		        
	</style>
	</header>
	<link rel="stylesheet" href="util.css">
	
</head>
<body>

		<div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-10" src="Group1571.png">
                    <a href="index.php" class="h-10 w-12 ml-5 text-3xl">Fundle</a>
			</div>
		</div>
		<div class="h-0.5 bg-black"></div>
		<div class="w-1/2 mx-auto">
			<form action="config_db.php" method="post">
			  <div class="container mt-4 w-1/2 mx-auto ">
			    <h1 class="text-center text-2xl">Sign In</h1>
			    

			    
			    <input class="h-10 mt-5 w-full bg-blue-200 text-center" type="text" placeholder="Enter login" name="login" required><br>


			    <input class="mt-5 h-10 w-full bg-blue-200 text-center" type="password" placeholder="Enter Password" name="pass" required><br>
			    

			    <p class="mt-5"></p>
			    <button  type="submit" class=" h-20 w-full registerbtn bg-blue-200">Sign in</button>
    			</div>
    			<div class="text-center mt-10 font-semibold text-3xl">
			    <?php
                    if ($_SESSION['message']) {
                        echo '<p class="text-red-400"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
                </div>
			</form>
		</div>

</body>
<script type="text/javascript">
</script>
</html>