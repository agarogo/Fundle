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
	<link rel="stylesheet" href="uniqueregetereteeregeye.css">
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
	<link href = "fonts/roboto/stylesheet.css" rel = "stylesheet" type = "text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="dio.css">
	<link rel="stylesheet" href="util2.css">
    <link rel="stylesheet" href="/fonts/stylesheet2.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<header>
		<style>
		    .y123{
            	font-size: 8rem;
                line-height: 1;
            }
            .y1234{
            	font-size: 4.5rem;
            	line-height: 1;
            }
            
            
            .y12345{
            	font-size: 6rem;
            	line-height: 1;
            }
            .obx{
            	align-items: center;
            }
            .m-22{
            	margin-top: 4rem;
            }
            .y11{
            	font-size: 2.25rem;
            	line-height: 2.5rem;
            }
            .h1{
            	height: 960px;
            }
            .rr5{
            	height: 55.5%;
            }
            .wwrr{
            	width: 54%;
            }
            .rr4{
            	height: 44.5%;
            }
            .h2{
            	 height: 550px;
            }
            .m3{
            	margin-top: 0.75rem;
            }
            .m36{
            	margin-top: 9rem;
            }
            
            .roogo{
            	display: flex;
            }
            .imgeno{
            	background-image: url(Group40.png);
            	height: 317px;
            	width: 58px;
            }
            .imgeno2{
            	background-image: url(Group41.png);
            	height: 314px;
            	width: 58px;
            }
            .m209{
            	margin-top: 6rem;
            }
            
		</style>
	</header>
	<link rel="stylesheet" href="util.css">
<body style="background-color: #FFFDFA;">	
<div id="page-preloader" class="preloader">
    <div class="loader"></div>
</div>
<div class="h-screen w-full" style="background-image: url(ip3.jpg); background-size: cover;">
    <div class="h-2/6 bg-blue-100 rounded-b-3xl w-11/12 mx-auto">
        <div class="h-full w-12/12 mx-auto">
            <div class="h-24 flex w-4/5  mx-auto">
                <div class="flex mt-auto w-full mx-auto">
                    <div class="flex mr-auto my-auto h-10">
                        <img class="h-10" src="Group1571.png">
                        <a href="index.php" class="h-10 w-12 ml-5 text-3xl">Fundle</a>
                    </div>


                    <div class="mt-3 flex ">
                        <a href="regg.php" class="text-lg ">Таблица</a>
                        <a href="main.php#2" class="text-lg ml-10">Лента заданий</a> 
                        <a href="torg.php" class="text-lg ml-10">Торговая площадка</a>
                        <p class="text-lg ml-10">Баланс</p>
                        <?php
                        	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
                                
                            if (!$connect) {
                                die('Error connect');
                            }
                                
                        ?>
    				    <div class="font-semibold my-auto md:text-base text-xs lg:text-xl text-blue-600 ml-5">
                			<?php
                			    $user_id = $_SESSION['user']['id'];
                                
                                $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = ".$user_id);
                                $users = mysqli_fetch_all($res);
                                
                                echo ($users[0][2]);
                			?>	
                		</div>
                    </div>
                    <div class="mt-1 flex ml-auto">
                        <a href="#" class="text-lg ml-10">Профиль</a>
                    </div>
                </div>
            </div>
            <!--О чем-->
            <div class="h-full w-4/5 flex mx-auto">
                <div class="h-full w-5/12">
                    <div class="h-ful flex">
                        <div class="h-28 w-28 mt-20 ml-20" style="background-image: url(okini.png); background-size: cover;"></div>
            			<div class="mt-28 ml-5">
            			    <div class="my-auto ml-5 flex">
            			        <h1 class="text-2xl ml-5"><?php echo ($users[0][6]); ?></h1>
            			        <form action="up.php" method="post">
                    		        <button>
                            		    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-2 ml-4">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                    		    </form>
            			    </div>
            			    <div class="flex">
            			        <h1 class="text-lg ml-5"><?php echo ($users[0][8]); ?></h1>
            			        <form action="up1.php" method="post">
            			        <button>
                        		    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>
                                </form>
            			        <h1 class="text-lg ml-10"><?php echo ($users[0][5]); ?></h1>
            			        <form action="up2.php" method="post">
            			        <button>
                        		    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>
                                </form>
            			    </div>
            			</div>
                    </div>
                    <form action="logout.php" method="post">
        			    <button type="submit" class="mt-5 w-24 my-auto ml-16 text-xl duration-200 transition ease-in-out delay-150 hover:ease-in hover:scale-110 hover:bg-indigo-500 bg-indigo-300 rounded-full">Выйти</button>
        			</form>
                </div>
                <div class="h-full w-7/12 ">
                    <div class="font-semibold mt-28 mx-auto h-10 w-40 md:text-base text-2xl lg:text-3xl text-blue-600 flex">
            			<?php
            			    $user_id = $_SESSION['user']['id'];
                            
                            $res = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = ".$user_id);
                            $users = mysqli_fetch_all($res);
                            
                            echo ($users[0][2]);
            			?>	
            			<p>F</p>
            		</div>
            		
                </div>
            </div>
            

        </div>
    </div>
</div>


	


	







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








<!--1post-->
<div class="opup-bg4 rounded-2xl">
    <div class="opup4">
        <div class="flex h-1/12">
            <svg class="close-opup4 h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-2 h-2">
                <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="flex h-4/6">
            <p>The iPhone 13 Mini is a compact smartphone from Apple Inc. that was released in 2021. 
                It features a 5.4-inch OLED display, A15 B 6-core CPU and 4-core GPU, and a dual-camera 
                system with night mode. The design of the 13 Mini is similar to that of its predecessor, 
                the iPhone 12 Mini, but it offers improved battery life and performance. It is available 
                in five different colors: pink, blue, midnight, starlight, and (Product)RED. The iPhone 13 
                Mini is also water and dust resistant, and supports features such as Face ID and 5G connectivity.
                 Overall, the iPhone 13 Mini offers a smaller and more affordable
                 option for those who prefer a compact smartphone with the latest features and technology.</p>
        </div>
        <div class=" h-2/6">
            <div class="flex mt-5 mr-2 ml-2">
                <p class="text-2xl text-blue-400 gert mt-1 w-2/5">iPhone 13 mini and iPhone 13</p>
                <p class="ml-auto text-2xl w-3/5">From $599 or $24.95/mo.per month for 24 mo.months before trade‑inFootnote*</p>
            </div>
            <div class="flex mt-5 mr-2 ml-2">
                <p class="mt-5">Model. Which is best for you?</p>
                <form action="1.php" class="flex ml-auto">
                    <button class="h-10 w-32 ml-auto rounded-full text-black gert"style="background-color: #0061FE;">Предзаказ</button>
                </form>
            </div>
        </div>
    </div>
</div>







<script src="jquery.min.js"></script>
<script src="main.js"></script>

<script>
    const modal = document.querySelector('#modal');
    const btn = document.querySelector('#openModal');
    const close = document.querySelector('.close');

    btn.onclick = function () {
    modal.style.display = 'block';
    };

    close.onclick = function () {
    modal.style.display = 'none';
    };

    window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
    };
</script>
<script src="preloader.js">
    document.body.onload = function() {
    setTimeout(function(){
        var preloader = document.getElementById('page-preloader');
        if( !preloader.classList.contains('done') )
        {
            preloader.classList.add('done');
        }
    }, 1000);
}
</script>
</body>

</html>