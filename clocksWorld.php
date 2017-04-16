
<!DOCTYPE html>
<html>

<HEAD> <title>World Clocks</title> 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <script type="text/javascript" src="moment-timezone.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="../../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap theme -->
  <link href="../../bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</HEAD>

<body>

<link type="text/css" rel="stylesheet" href="../stylesheet.css"/>
<link type="text/css" rel="stylesheet" href="../Portfolio/clocks.css"/>

<!-- Horizontal bar-->
<?php include '../header.php'; ?>

<body id ="mainWall"> <!-- Has wallpaper-->

<div class="container theme-showcase" role="main">
      <div class = "message" style="padding:15px;">  
        <h1> <span class="themefont"> World Clocks </span> </h1>
        <br>

        <center><select id = "timezones" style="width: 300px" onchange="changeImage()">
          <option value="BakerIsland"> Baker Island (UTC-12) </option>
          <option value="Niue">Alofi, Niue (UTC-11)</option>
          <option value="Hawaii"> Honolulu, Hawaii (UTC-10)</option>
          <option value="Alaska">Juneau, Alaska (UTC-9)</option>
          <option value="Vancouver">Vancouver, B.C. (UTC-8)</option>
          <option value="Edmonton">Edmonton, Alberta (UTC-7)</option>
          <option value="Mexico">Mexico City, Mexico (UTC-6)</option>
          <option value="Cuba">Havana, Cuba (UTC-5) </option>
          <option value="Chile">Santiago, Chile (UTC-4) </option>
          <option value="Argentina">Buenos Aires, Argentina (UTC-3)</option>
          <option value="Brazil">Fernando de Noronha, Brazil (UTC-2)</option>
          <option value="Greenland">Ittoqqortoormiit, Greenland (UTC-1)</option>
          <option value="London" selected="selected">London (UTC)</option>
          <option value="Lagos">Lagos, Nigeria (UTC+1)</option>
          <option value="Finland">Helsinki, Finland (UTC+2) </option>
          <option value="Moscow">Moscow, Russia (UTC+3)</option>
          <option value="UAE">Abu Dhabi, United Arab Emirates (UTC+4)</option>
          <option value="Uzbek">Tashkent, Uzbekistan (UTC+5)</option>
          <option value="Bangladesh">Dhaka, Bangladesh (UTC+6)</option>
          <option value="Bangkok">Bangkok, Thailand (UTC+7)</option>
          <option value="Beijing">Beijing, China (UTC+8)</option>
          <option value="Tokyo">Tokyo, Japan (UTC+9) </option>
          <option value="Canberra">Canberra, Australia (UTC+10)</option>
          <option value="Vanuatu">Port Vila, Vanuatu (UTC+11)</option>
          <option value="NewZealand">Auckland, New Zealand (UTC+12)</option>
        </select></center>

        <br>
       <center> <canvas id="clock" class="London" width="400" height="250"></canvas>
        <br>
        <br>
        <canvas id="map" class="London" width="650" height="300"></canvas> </center>
        <br>

        <!--Beginning of Javascript -->
        <script>

        var utcValue = 0; //by default, it's UTC 
        var clock = document.getElementById("clock");
        var clock_int = setInterval(getClock, 1000);

        function changeImage(){
          var choice = document.getElementById("timezones").selectedIndex;
          switch(choice) {
            case 0: //-12
              document.getElementById("clock").className = "BakerIsland";
              document.getElementById("map").className = "BakerIsland";
              utcValue = -12;
              setInterval(getClock, 1000);
              break;
            case 1: //-11
              document.getElementById("clock").className = "Niue";
              document.getElementById("map").className = "Niue";
              utcValue = -11;
              setInterval(getClock, 1000);
              break;
            case 2: //-10
              document.getElementById("clock").className = "Hawaii";
              document.getElementById("map").className = "Hawaii";
              utcValue = -10;
              setInterval(getClock, 1000);
              break;
            case 3: //-9
              document.getElementById("clock").className = "Alaska";
              document.getElementById("map").className = "Alaska";
              utcValue = -9;
              setInterval(getClock, 1000);
              break;
            case 4: //-8
              document.getElementById("clock").className = "Vancouver";
              document.getElementById("map").className = "Vancouver";
              utcValue = -8;
              setInterval(getClock, 1000);
              break;
            case 5: //-7
              document.getElementById("clock").className = "Edmonton";
              document.getElementById("map").className = "Edmonton";
              utcValue = -7;
              setInterval(getClock, 1000); 
              break;
            case 6: //-6
              document.getElementById("clock").className = "Mexico";
              document.getElementById("map").className = "Mexico";
              utcValue = -6;
              setInterval(getClock, 1000); 
              break;
            case 7: //-5
              document.getElementById("clock").className = "Cuba";
              document.getElementById("map").className = "Cuba";
              utcValue = -5;
              setInterval(getClock, 1000); 
              break;
            case 8: //-4
              document.getElementById("clock").className = "Chile";
              document.getElementById("map").className = "Chile";
              utcValue = -4;
              setInterval(getClock, 1000);
              break;
            case 9: //-3
              document.getElementById("clock").className = "Argentina";
              document.getElementById("map").className = "Argentina";
              utcValue = -3;
              setInterval(getClock, 1000);
              break;
            case 10: //-2
              document.getElementById("clock").className = "Brazil";
              document.getElementById("map").className = "Brazil";
              utcValue = -2;
              setInterval(getClock, 1000);
              break;
            case 11: //-1
              document.getElementById("clock").className = "Greenland";
              document.getElementById("map").className = "Greenland";
              utcValue = -1;
              setInterval(getClock, 1000);
              break;
            case 12: //UTC
              document.getElementById("clock").className = "London";
              document.getElementById("map").className = "London";
              utcValue = 0;
              setInterval(getClock, 1000); 
              break;
            case 13: //+1
              document.getElementById("clock").className = "Lagos";
              document.getElementById("map").className = "Lagos";
              utcValue = 1;
              setInterval(getClock, 1000);
              break;
            case 14: //+2
              document.getElementById("clock").className = "Finland";
              document.getElementById("map").className = "Finland";
              utcValue = 2;
              setInterval(getClock, 1000);
              break;
            case 15: //+3
              document.getElementById("clock").className = "Moscow";
              document.getElementById("map").className = "Moscow";
              utcValue = 3;
              setInterval(getClock, 1000);
              break;
            case 16: //+4
              document.getElementById("clock").className = "UAE";
              document.getElementById("map").className = "UAE";
              utcValue = 4;
              setInterval(getClock, 1000);
              break; 
            case 17: //+5
              document.getElementById("clock").className = "Uzbek";
              document.getElementById("map").className = "Uzbek";
              utcValue = 5;
              setInterval(getClock, 1000);
              break;
            case 18: //+6
              document.getElementById("clock").className = "Bangladesh";
              document.getElementById("map").className = "Bangladesh";
              utcValue = 6;
              setInterval(getClock, 1000);
              break;
            case 19: //+7
              document.getElementById("clock").className = "Bangkok";
              document.getElementById("map").className = "Bangkok";
              utcValue = 7;
              setInterval(getClock, 1000);
              break;
            case 20: //+8
              document.getElementById("clock").className = "Beijing";
              document.getElementById("map").className = "Beijing";
              utcValue = 8;
              setInterval(getClock, 1000);
              break;
            case 21: //+9
              document.getElementById("clock").className = "Tokyo";
              document.getElementById("map").className = "Tokyo";
              utcValue = 9;
              setInterval(getClock, 1000);
              break;
            case 22: //+10
              document.getElementById("clock").className = "Canberra";
              document.getElementById("map").className = "Canberra";
              utcValue = 10;
              setInterval(getClock, 1000);
              break;
            case 23: //+11
              document.getElementById("clock").className = "Vanuatu";
              document.getElementById("map").className = "Vanuatu";
              utcValue = 11;
              setInterval(getClock, 1000);
              break;
            case 24: //+12
              document.getElementById("clock").className = "NewZealand";
              document.getElementById("map").className = "NewZealand";
              utcValue = 12;
              setInterval(getClock, 1000);
              break;
            default:
              document.getElementById("clock").className = "London";
              document.getElementById("map").className = "London";
              utcValue = 0;
              setInterval(getClock, 1000); 
              break;
          }
        }
  
        function getClock()
        {
          var d = new Date();
          d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000 /* convert to UTC */ + (utcValue) * 60 * 60 * 1000);

         var str = positionZero(d.getHours(), d.getMinutes(), d.getSeconds());
         //Get the Context 2D or 3D
         
         var context = clock.getContext("2d");
         context.clearRect(0, 0, 500, 200);
         context.font = "80px Arial";
         context.strokeStyle = "white";
         context.lineWidth = 2;
         context.strokeText(str, 44, 155); //string, horizontal, vertical
        }

        function positionZero(hour, min, sec)
        {
          var curTime;
          if(hour < 10)
            curTime = "0"+hour.toString();
          else
            curTime = hour.toString(); 
       
          if(min < 10)
            curTime += ":0"+min.toString();
          else
            curTime += ":"+min.toString(); 
       
         if(sec < 10)
            curTime += ":0"+sec.toString();
         else
            curTime += ":"+sec.toString();
            return curTime;
        }

        </script>

        <!--End of Javascript -->
        <br>
        <br>
        <h3> Background</h3> 
        <p> The clock is displayed on a canvas and the map on another canvas using Javacsript and HTML. It was a simple calculation using seconds and certain functions such as
          getTimezoneOffset() and setInterval() to make the clock active. I recognize that there are many well-known cities in each time zone, but for some zones,
          I chose the one that are not as well known as European and North American cities. By default, London is displayed as its time zone is the central one in 
          the world (UTC). I had a lot of fun playing around with the font of the digital clock, as well as picking the background photos for each time zone.
          Please note that currently, these time zones for certain cities are in default mode (and not in their summer time zones).
          For a link to the code for this webpage, see the <a href="https://github.com/ZarinStar/worldClocks" target="_blank"> project on my GitHub account. </a> </i> </p> 

        <!-- http://www.uiupdates.com/create-digital-clock-using-html5-canvas-and-javascript/-->
      </div>
     </div>

</body>

<?php include('footer.html'); ?>

</html>