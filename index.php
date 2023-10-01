<?php
	$connect = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
	
	if (!$connect) {
	    die('Error connect');
	}
	
?>
<?php
	session_start();
	if ($_SESSION['user']) {
        header('Location: main.php');
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
		    .opup-bg4 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    display: none;

}

.opup4 {
    position: absolute;
    background: white;
    width: 800px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 30px;
    padding-top: 60px;
    border-radius: 25px;
    height: 550px;
}
.close-opup4 {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.no-scroll4 {
    overflow-y: hidden;
}
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
    <div class="h-full w-3/4 mx-auto">
        <div class="h-24 flex w-full">
            <div class="flex mt-auto w-full mx-auto">
                <div class="flex mr-auto my-auto h-10">
                    <img class="h-10" src="Group1571.png">
                    <a href="index.php" class="h-10 w-12 ml-5 text-3xl">Fundle</a>
                </div>


                <div class="mt-3 flex ">
                    <a href="#1" class="text-lg underline decoration-blue-400  decoration-2 underline-offset-8">О нас</a>
                    <a href="#2" class="text-lg ml-10">Лента заданий</a> 
                    <a href="#3" class="text-lg ml-10">Контакты</a>
                </div>
                <div class="mt-1 flex ml-auto">
                    <form action="sign.php" method="post">
                        <button type="submit" class=" rounded-3xl w-40 h-12 flex my-auto ml-10 text-lg border-2" style="background-color: #0061FE;">
                            <a class="mx-auto my-auto hover text-white">Войти</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!--О чем-->

        <div class="h-4/6 mt-32 text-center flex">

    
            <div style="position: absolute;" class=" mt-28 font-bold select-none">
                <p class="text-5xl text-left ">Научись</p>
                <p class="text-5xl text-left">распределять</p>
                <p class="text-5xl text-left ">финансы</p>
                <p class="text-5xl text-left">будущего</p>
            </div>
    
            
            <div class="ml-auto select-none">
                <img src="Frame33.png">
            </div>
        </div>
        <div class="h-1/6 w-full">
            <form action="sign.php" method="post">
                <button type="submit" class="rounded-3xl w-48 h-12 flex mx-auto " style="background-color: #0061FE;">
                    <a class="mx-auto my-auto hover text-3xl text-white">Начать</a>
                </button>
            </form>
        </div>
    </div>
    
</div>


	


	


<div class="w-10/12 mx-auto h-96 mt-10">
		<div class="h-11 ">
			<h1 class="text-4xl">Задания</h1>
		</div>


		<div id="2" class="media-scroller snaps-inline mt-20" style="height: 400px;">
            <div class="media-element">
                <div class="h-full mr-10 rounded-xl">
                    <div class="h-2/4 bg-blue-300"></div>
                    <div class="h-1/4">
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="text-2xl text-blue-400 gert">Напишисать 2 поста</p>
                            <p class="ml-auto text-2xl">300 F</p>
                        </div>
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="w-3/4">Напишите 2 любых поста</p>
                            <button class="open-opup4 h-10 w-1/4 ml-auto rounded-full text-black gert"
                            style="background-color: #0061FE;">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-element">
                <div style="background-image: url(231.png); background-size: cover;"  class="h-full mr-10 rounded-xl">
                    <div class="h-2/4 bg-blue-300"></div>
                    <div class="h-1/4">
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="text-2xl text-blue-400 gert">Сделать мем</p>
                            <p class="ml-auto text-2xl">250 F</p>
                        </div>
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="w-3/4">Любые мемы связанные с вашим Акселератором</p>
                            <button class="open-opup4 h-10 w-1/4 ml-auto rounded-full text-black gert"
                            style="background-color: #0061FE;">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-element">
                <div style="background-image: url(231.png); background-size: cover;"  class="h-full mr-10 rounded-xl">
                    <div class="h-2/4 bg-blue-300"></div>
                    <div class="h-1/4">
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="text-2xl text-blue-400 gert">Скоро</p>
                            <p class="ml-auto text-2xl">Скоро</p>
                        </div>
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="w-3/4">Скоро</p>
                            <button class="open-opup4 h-10 w-1/4 ml-auto rounded-full text-black gert"
                            style="background-color: #0061FE;">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-element">
                <div style="background-image: url(231.png); background-size: cover;"  class="h-full mr-10 rounded-xl">
                    <div class="h-2/4 bg-blue-300"></div>
                    <div class="h-1/4">
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="text-2xl text-blue-400 gert">Скоро</p>
                            <p class="ml-auto text-2xl">Скоро</p>
                        </div>
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="w-3/4">Скоро</p>
                            <button class="open-opup4 h-10 w-1/4 ml-auto rounded-full text-black gert"
                            style="background-color: #0061FE;">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-element">
                <div style="background-image: url(231.png); background-size: cover;"  class="h-full mr-10 rounded-xl">
                    <div class="h-2/4 bg-blue-300"></div>
                    <div class="h-1/4">
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="text-2xl text-blue-400 gert">Скоро</p>
                            <p class="ml-auto text-2xl">Скоро</p>
                        </div>
                        <div class="flex mt-5 mr-2 ml-2">
                            <p class="w-3/4">Скоро</p>
                            <button class="open-opup4 h-10 w-1/4 ml-auto rounded-full text-black gert"
                            style="background-color: #0061FE;">ПОДРОБНЕЕ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>


    <div class="mt-40 h-1"></div>
    
	<div class="w-10/12 mx-auto mt-40" style="height: 500px;">
        <div class="flex h-full w-full mt-10">
            <div class="h-full mr-auto wwrr">
                <div class="h-11 ">
                    <h1 class="text-4xl">Задания</h1>
                </div>
                <div class="mt-5 h-full border-2 rounded-3xl border-black"></div>
            </div>
            <div class="ml-auto w-5/12">
                <div class="h-11 ">
                    <h1 class="text-4xl">Мероприятия</h1>
                </div>
                <div class="mt-5 h-full border-2 rounded-3xl border-black" style="background-image: url(22.jpg); background-size: cover;"></div>
            </div>
        </div>
	</div>





<div class="h-96 w-3/4 mx-auto mt-40" id="3">
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
<script src="main1.js"></script>

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