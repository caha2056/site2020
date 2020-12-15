<meta charset="UTF-8">
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>		
<center>			
		<a href="index.html" target="_blank"><font face="Copperplate Gothic Light"><H2><span class="sign__word">Games 2020</span></H2></font></a>
</div>   
      <script  src="js/значки.js"></script>
        <title>Drop Menu Pure CSS3</title> 
            <link rel="stylesheet" href="style11.css">             
        <h1> </h1>
        <nav style:marging-bootom:100%;>
          <ul class="main">		 
            <li>
              <a href="http://localhost/"face="Rockwell"target="_blank">Главная</a>
              <ul class="drop menu1">
                <li><a href="index.html">Домой</a></li>
                <li><a href="#">news</a></li>
              </ul>
            </li>
            <li><a href="http://localhost/каталог.html">каталог продукции</a>
              <ul class="drop menu2">
                <li><a href="#">Игры</a></li>
                <li><a href="#">Поиск</a></li>
              </ul>
            </li>
            <li><a href="#">поддержка</a>
              <ul class="drop menu3">
              </ul>
            </li>
            <li><a href="php-auth/index.php">Профиль</a>
              <ul class="drop menu4">
                <li><a href="#">Личныйаккаунт</a></li>
                <li><a href="http://localhost/php-auth/register.php">Регистрация</a></li>                
              </ul>
            </li>           

            <body text="#FFF" >
      <meta charset="UTF-8">
          <title>Neon</title>
          <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         
              <link rel="stylesheet" href="style2.css">  

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link href="assets/css/main.css">
</head>
<body>





    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="250" alt="">
        <h2 style="margin: px 0px;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

    <style>
   body {
    background-image: url(images/1521541103_city.gif); /* Путь к фоновому изображению */
    background-attachment: fixed; /* Фиксируем фон веб-страницы */
   }
  </style>
</center>




</body>
</html>