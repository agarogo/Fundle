<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="util2.css">
    <link rel="stylesheet" href="/fonts/stylesheet2.css">
	<header>
		<style>
		    a:hover {
                color: rgb(37 99 235);
                text-decoration: none;
            }
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
	</header>
	<link rel="stylesheet" href="util.css">
</head>
<body>
    <?php
    	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
    	
    	if (!$connect) {
    	    die('Error connect');
    	}
    ?>
    
    <div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-14" src="Group1571.png">
				<a href="index.php" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">Fundle</a>
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
				<a href="pro.php" class="gi md:text-base text-xs lg:text-xl ml-8 my-auto center">Профиль</a>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 my-auto h-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
			</div>
	</div>
	<div class="text-3xl w-64 mx-auto font-semibold"><h1>Перевести</h1></div>
    <div class="w-64 mx-auto mt-20">
        
    	<div class="w-64 flex">
    		<div class="w-32 h-20  border-2 border-black text-center text-2xl">ID</div>
    		<div class="w-32 h-20 border-2 border-black text-center text-2xl">Fundle</div>
    	</div>
    	    <?php
                $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`<5");
                $users = mysqli_fetch_all($res);
                
                foreach ($users as $user) {
                    
                    $bolder = "";
                    
                    if(
                        ($user[0]==$_SESSION['user']['id']) || 
                        ($user[0]==0)) {
                        $bolder = "font-bold";
                    }
                        
                    ?>
                            <div class="flex w-64 <?= $bolder ?>">
                                <div class=" border-2 w-64 border-black text-center text-2xl ">
                                    <?= $user[7] ?>
                                </div>
                                <div class=" border-2 w-64 border-black text-center text-2xl ">
                                    <?= $user[2] ?>
                                </div>
                            </div>
                            
                        
                    <?php
                   
                }
            ?>
    	
    	<div class="w-64 flex">
    	    <form action= 'php.php?id=<?= $user[0] ?>' method="post" action= 'table.php'>
    		    <button type="submit"  class="w-32 h-20 border-2 border-black text-center text-2xl">+100 F</button>
    		</form>
    		
    		<form action= 'php1.php' method="post" action= 'table.php'>
    		    <button type="submit"  class="w-32 h-20 border-2 border-black text-center text-2xl">-100 F</button>
    		</form>
    		
    	</div>
    	<div>
    	    <form action="index.php">
                <button type="submit" class="w-64 h-20 border-2 border-black text-2xl">Fundle</button>
            </form>
    	</div>
	</div>



</div>
<div class="w-10/12 mx-auto h-16"></div>
	<div class="h-0.5 w-10/12 bg-black mb-20 mx-auto"></div>
	
	
	




<div class="h-96 w-3/4 mx-auto mt-40" id="2">
    <p class="text-black text-4xl pt-20 text-center">НАШИ КОНТАКТЫ</p>
    <div class="flex">
        <div class="flex">
            <div class="mt-20">
                <p class="text-xl text-black">Служба поддержки</p>
                <span class="text-2xl">+7(984)116-16-02</span>
            </div>
            <div class="mt-20 ml-20">
                <p class="text-xl text-black">Почта</p>
                <span class="text-2xl">rewerewu@gmail.com</span>
            </div>
        </div>
        <div class="flex ml-auto">
            <div class="mt-20 mt-auto">
                <p class="text-xl text-black"></p>
                <span class="text-xl">Copyright © 2023 Fundle. All rights reserved.</span>
            </div>
        </div>
    </div>
    
</div>
<div class="h-40">
    <div class="h-0.5 mx-auto rounded-full bg-black"></div>
</div>


</body>
</html>
