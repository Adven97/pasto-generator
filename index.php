<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="costam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <!--  <link rel="stylesheet" href="style.css" type="text/css">   -->
    <title>Twoja Daily Pasta!</title>
    <style>
      body{
        background-color: 	#383838;
        color: #E0E0E0;
        margin: 0 0px;
        padding: 0px;
      }
      h1{
        color:#CCCC33;
        font-size: 48px;
        font-family: 'Lobster';
        text-shadow: 1px 1px 0 #000,
    -1px 1px 0 #000,
    1px -1px 0 #000,
    -1px -1px 0 #000,
    0px 1px 0 #000,
    0px -1px 0 #000,
    -1px 0px 0 #000,
    1px 0px 0 #000,
    2px 2px 0 #000,
    -2px 2px 0 #000,
    2px -2px 0 #000,
    -2px -2px 0 #000,
    0px 2px 0 #000,
    0px -2px 0 #000,
    -2px 0px 0 #000,
    2px 0px 0 #000,
    1px 2px 0 #000,
    -1px 2px 0 #000,
    1px -2px 0 #000,
    -1px -2px 0 #000,
    2px 1px 0 #000,
    -2px 1px 0 #000,
    2px -1px 0 #000,
    -2px -1px 0 #000;
      }
      h2{
        color:	#E0E0E0;
        font-size: 38px;
        font-family: impact;
        text-shadow: 1px 1px 0 #000,
    -1px 1px 0 #000,
    1px -1px 0 #000,
    -1px -1px 0 #000,
    0px 1px 0 #000,
    0px -1px 0 #000,
    -1px 0px 0 #000,
    1px 0px 0 #000,
    2px 2px 0 #000,
    -2px 2px 0 #000,
    2px -2px 0 #000,
    -2px -2px 0 #000,
    0px 2px 0 #000,
    0px -2px 0 #000,
    -2px 0px 0 #000,
    2px 0px 0 #000,
    1px 2px 0 #000,
    -1px 2px 0 #000,
    1px -2px 0 #000,
    -1px -2px 0 #000,
    2px 1px 0 #000,
    -2px 1px 0 #000,
    2px -1px 0 #000,
    -2px -1px 0 #000;
      }
      #top{
        width: 100%;
        height:120px;
        padding-top:1px;
background-color:#303030;
      }
      #pt{
        text-align: center;
      }

      #tyt{

        text-align: center;
        margin-top: 0px;
        margin:0px;
      }
      #container{
        margin-left: auto;
        margin-right: auto;
      }
      #pasta{

        margin-left: auto;
        margin-right: auto;
        width:800px;
        font-family: 'Oxygen Mono', monospace;
        font-size: 13px;

      }
    </style>
  </head>

  <body>
  <?php
  require_once 'connect.php';

 $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
 $polaczenie->set_charset("utf8");

        $temp =date("j");
        $temp2 =rand(1,31);
        $sql="SELECT * FROM baza_past WHERE id=$temp";

        if($rezultat =@$polaczenie->query($sql) ){
            $wiersz = $rezultat->fetch_assoc();

            $id=$wiersz['id'];
            $tyt= $wiersz['tytul'];
            $tresc= $wiersz['tresc'];


            $tresc2 =nl2br($tresc);
        }

echo<<<END
<div id="container">
<div id="top">
  <header id="tyt">
    <h1 id="str">Twoja Daily Pasta</h1>
  </header>
</div>
<div id="pt"><h2>$tyt</h2></div>
  <div id="pasta">
    <article><p> $tresc2 </p></article>
  </div>
</div>

END;
   ?>
   <!--przykładowe dodawanie obrazka: <img src="img/gesi.jpg" alt="Gesi" style="width:950px;height:700px;"> -->
  </body>
</html>
