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
	<title></title>
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
    <div class="h-24 flex w-5/6 mx-auto">
        <div class="flex mt-auto w-full mx-auto">
            <div class="flex mr-auto my-auto h-10">
                <img class="h-10" src="Group1571.png">
                <a href="index.php" class="h-10 w-12 ml-5 text-3xl">Fundle</a>
            </div>
    
    
            <div class="mt-3 flex ">
                <a href="#" class="text-lg underline decoration-blue-400  decoration-2 underline-offset-8">Таблица</a>
                <a href="main.php#2" class="text-lg ml-10">Лента заданий</a> 
                <a href="torg.php" class="text-lg ml-10">Торговая площадка</a>
                <p class="text-lg ml-10">Баланс:</p>
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
                <a href="prof.php" class="text-lg ml-10">Профиль</a>
            </div>
        </div>
    </div>
    
<div class="w-10/12 mx-auto mt-20">
    <h1 class="text-3xl font-bold">Таблица Экономики</h1>
</div>
<div class="text-2xl mt-20 select-none">
<?php
	$conn = mysqli_connect('localhost', 'u2264446_test1', 'uT5mI1tB4mkO1uA7', 'u2264446_test');
    $sql = "SELECT * FROM `users` WHERE `id`<5";
	if($result = $conn->query($sql)){
      $rowsCount = $result->num_rows;
      echo "<table border='2' align='center' cellpadding='13' width>
                  <tr>
                      <th>Пользователь</th>
                      <th>Баланс</th>
                      <th>Команда<th>
                      <th>Ранг</th>
                  </tr>";
      foreach($result as $row){
      
          echo "<tr class='rowId' >";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["numder"] . "</td>";
              echo "<td>" . $row["firstname"] . "</td>";
              echo "<td>" . $row["rang"] . "</td>";
          echo "</tr>";;
      }
      echo "</table>";
      $result->free();
  } else{
      echo "Ошибка: " . $conn->error;

  }
  $conn->close();


 ?>
</div>


</body>
</html>

            




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