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
        color: #4169E1;
        font-size: 40px;
        font-family: 'Lobster';
      }
      #top{
        width: 100%;
        height:120px;
        padding-top:1px;
background-color:#303030;
      }
      #tp{
        width: 340px;
      }
      #cbtn{
        margin-left: 25px;
        width:120px;
      }
      #ddd{
        width:60px;
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
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        width:750px;
        font-family: 'Oxygen Mono', monospace;
        font-size: 15px;

      }
    </style>
  </head>

  <body>

    <div id="container">
    <div id="top">
      <header id="tyt">
        <h1 id="str">Dodaj Pastę</h1>
      </header>
    </div>

      <div id="pasta">
    <form action="dodaj.php" method="post" id="form">
      Tytuł:<br/> <input type="text" name="tyt_pasty" id="tp" />
      Dzień miesiąca: <select name="dzien" id="ddd">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>

        </select>
        <input type="submit" value="Prześlij" id ="cbtn">
      </br/>
      Treść:<br>
      <textarea rows="22" cols="100" name="tresc_pasty"></textarea>
      <br /><br />

    </form>
      </div>
    </div>

  </body>
</html>
