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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="util2.css">
    <link rel="stylesheet" href="/fonts/stylesheet2.css">
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
<body>	
<div id="page-preloader" class="preloader">
        <div class="loader"></div>
    </div>
	<div class="w-10/12 mx-auto h-40 bg-white flex">
			<div class="flex h-16 mr-auto my-auto">
				<img class="h-14" src="Group1571.png">
				<a href="#" class="md:text-xl text-xs lg:text-4xl ml-8 font-bold my-auto center">Fundle</a>
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
				
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 my-auto h-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
			</div>
	</div>
	
	<div style="height: 750px; position:relative;" class=" w-10/12 mx-auto flex">
		
		<div class="" style="margin-top: -70px; height: 600px; width: 680px; margin-left: -160px; background-image: url(Ellipse153.png); background-size: cover; position: absolute;">
			
		</div>

		<div style="position: absolute;" class=" mt-28 font-bold select-none">
			<p class="text-5xl text-left text-white">Научись</p>
			<p class="text-5xl text-left text-white">распределять</p>
			<p class="text-5xl text-left text-white">финансы</p>
			<p class="text-5xl text-left text-white">будущего</p>
		</div>

		
		<div class="ml-auto select-none">
			<img src="Frame33.png">
		</div>
		
	</div>


	<div class="w-10/12 h-96 mx-auto flex text-4xl flex">
		<p class="mt-20"><span class="text-blue-600">Фандлкоины</span> - это виртуальная валюта <span class="text-blue-600">Fundle</span>, чтобы научить школьников и будущие стартапы финансововой грамотности</p>
	</div>




	<div class="w-10/12 mx-auto " style="height: 500px;">
		<div class="h-11 ">
			<h1 class="text-4xl">Новые лоты</h1>
		</div>


		<div class="flex" style="height: 456px;">
			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mr-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image37.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Пуфик</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>20000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group15771.png">
					</div>
				</div>
			</div>
			

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image38.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Ноутбук MSI GeForce RTX 3060</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>50000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group15771.png">
					</div>
				</div>
			</div>


			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="Groupe33003.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Консультация с экспертом </h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>30000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group15771.png">
					</div>
				</div>
			</div>

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full mx-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="pt-10 mx-auto" src="image40.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Пачка сникерса + тайный бонус</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>10000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group15771.png">
					</div>
				</div>
			</div>

			<div class="h-84 md:h-96 lg:h-96 2xl:h-full ml-auto w-2/12 bg-white border-2 rounded-3xl border-black">
				<div class="rr5 w-10/12 mx-auto">
					<img class="py-14 mx-auto" src="Group1605.png">
				</div>
				<div class="rr4 w-10/12 mx-auto">
					<div class="h-3/6">
						<h1 class="text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-2xl">Обед с unique</h1>
					</div>
					
					<h1 class="text-base mt-1">Мин. цена</h1>
					<div class="text-xs md:text-lg lg:text-xl xl:text-2xl 2xl:text-4xl flex mt-1">
						<h1>30000</h1>
						<img class="h-6 ml-3 mt-2  mr-auto" src="Group15771.png">
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="w-10/12 mx-auto mt-16 flex" style="height: 500px;">
		<div class="mr-auto wwrr bg-white border-2 rounded-3xl border-black"></div>
		<div class="ml-auto w-5/12 bg-white border-2 rounded-3xl border-black">
			
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



<script src="jquery.min.js"></script>
<script src="main.js"></script>
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