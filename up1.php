<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
        
    if (!$connect) {
        die('Error connect');
    }
?>
<div class="font-semibold my-auto md:text-base text-xs lg:text-xl text-blue-600">
    <?php
        $user_id = $_SESSION['user']['id'];
                            
        $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = $user_id");
        $user = mysqli_fetch_all($res);
        
    ?>  
</div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fundle</title>
    <link rel="stylesheet" href="uniqueregetereteeregeye.css">
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="util2.css">
    <link rel="stylesheet" href="/fonts/stylesheet2.css">
	<style>
	            a {
                  text-decoration: none;
                  margin: 10px;
                  display: inline-block;
                  color: #000 ;
                }
                
                a::before,
                a::after {
                  content: "";
                  height: 2px;
                  background: #000;
                  display: block;
                  transition: width 0.3s ease-in-out;
                  margin: 0 auto;
                }
                
                a::before { width: 100%; }
                a::after { width: 0; }
                
                a:hover::before { width: 0; }
                a:hover::after { width: 100%; }
	</style>
</head>
<body>
    <div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-14" src="Group1571.png">
				<a href="profile.php" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">Fundle</a>
			</div>
			<div class="my-auto ml-auto flex h-16">
				<a href="regg.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Экономика</a>
				<a href="Auc.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Маркетплейс</a>
				<div class="my-auto flex">
				    <a href="table.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Баланс</a>
				    <?php
                    	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
                            
                        if (!$connect) {
                            die('Error connect');
                        }
                            
                            
                            
                            
                            
                    ?>
				    <div class="font-semibold my-auto md:text-base text-xs lg:text-xl text-blue-600">
            			<?php
            			    $user_id = $_SESSION['user']['id'];
                            
                            $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = ".$user_id);
                            $users = mysqli_fetch_all($res);
                            
                            echo ($users[0][2]);
            			?>
            		</div>
				    
				</div>
				<img class="h-3 my-auto ml-2" src="Group15771.png">
				<a href="pro.php" class="md:text-base text-xs lg:text-xl ml-8 my-auto center">Профиль</a>
				<i class="fas fa-home text-3xl mr-4 text-left my-auto"></i>
			</div>
	</div>
	<div class="h-0.5 md:h-0.5 lg:h-0.5 xl-h-0.5 2xl:h-0.5 bg-black"></div>
    <div class="w-4/12 mx-auto mt-20">
        <h3 class="w-full text-2xl text-center">Поменять Адресс</h3>
        <form action="update1.php" method="post">
            <div>
                <input class="font-sans block text-sm leading-5 w-full py-2 px-3 border-2 border-rose-600 text-slate-500 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500 dark:text-slate-400 dark:placeholder:text-slate-600 dark:bg-slate-900 dark:border-rose-500 dark:focus:ring-rose-900 dark:focus:border-rose-60 mt-10 text-xl" type="text" name="gmail" value="<?= $user['0']['8'] ?>"></input>
            </div>
            
            <button type="submit" class="w-32 h-14 my-auto mx-auto mt-14 text-xl duration-200 transition ease-in-out delay-150 hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Поменять</button>
        </form>
        
    </div>
</body>
</html>