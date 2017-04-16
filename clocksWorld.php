
<!DOCTYPE html>
<html>



<HEAD> <title>Clocks</title> 

<!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!- - <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> - ->
-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <script type="text/javascript" src="moment-timezone.js"></script>

    <!-- <link rel="icon" href="../../favicon.ico"> -->

   <!-- Bootstrap core CSS -->
    <link href="../../bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Bootstrap theme -->
    <link href="../../bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!--
    <!- - Custom styles for this template - ->
    <link href="../../bootstrap-3.3.7/docs/examples/theme/theme.css" rel="stylesheet"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
 h1
 {
  font-size: 20px;
  text-align: center;
 }
 #clock
 {
  display: block;
  margin: 0 auto;
  /*background-image: url("/Images/hawaii.jpg");*/
  background-size: 100% 100%;
  font-size: 20px;
 }
 #clock.hawaii
 {
  background-image: url("/Images/hawaii.jpg");;
 }
 #clock.moscow
 {
  background-image: url("/Images/hawaii.jpg");;
 }
 </style>


</HEAD>

<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

<body>

<link type="text/css" rel="stylesheet" href="stylesheet.css"/>

<!-- Horizontal bar-->
<?php include 'header.php'; ?>

<body id ="mainWall"> <!-- Has wallpaper-->
<!-- <body id ="gradBeige"> -->

 <!-- <div id="mainContainer" align="center"> - ->
   <section id="content-section"> 
    
    <h1> <span class="themefont"> Welcome! </span> </h1>
<!- - <div class="message" align="left"> - ->

<p> You have reached the website of Dar'ya Heyko! This is for my professional online portfolio where I can showcase my coding skills, my professional work experience in my co-op work terms, and side projects such as published writings. </p>

<p> <b> Please advise that this website is currently under construction. The style is pretty established at this point,
  but the pages under Co-op are lacking content. I'm currently working on making this mobile friendly so it might look a bit messy at some point. 
  Thank you for your patience! (Upated on August 16th, 2016) </b> </p>

<!- - <p> <a href="editor.html" target="_self">Editor, click here</a> </p> - ->

  <br>
    <!- - </div>- ->
   </section>
</div> -->

<div class="container theme-showcase" role="main">
      <div class = "message" style="padding:15px;">  
        <h1> <span class="themefont"> Time Zone Clocks (work in progress) </span> </h1>
        <br>

        <!--HAWAII TIME- ->
        <canvas id="canvasHAST" width="210" height="210" style="background-color:#333"></canvas> 
        <!- -TORONTO TIME-->
        <canvas id="clock" class="hawaii" width="400" height="200"></canvas>
        <br>
        <canvas id="clock" class="moscow" width="400" height="200"></canvas>

        <!-- <canvas id="canvasEST" width="210" height="210" style="background-color:#333"></canvas>
        <!- -LONDON TIME- ->
        <canvas id="canvasUTC" width="210" height="210" style="background-color:#333"></canvas>
        <!- -MOSCOW TIME- ->
        <canvas id="canvasMSK" width="210" height="210" style="background-color:#333"></canvas>
        <!- -TOKYO TIME- ->
        <canvas id="canvasJST" width="210" height="210" style="background-color:#333"></canvas> -->

        <br>

        <!--Beginning of Javascript -->
        <script>

        //body onLoad="show_clock(), show_clock2(), show_clock3(), show_clock4(), show_clock5()";
        //var context;
        //var d;
        //var str;
        //var intervalIds = [];

        var utcValue = 0; //by default, it's UTC 

        /*Grab all of the canvases*/
        //var clock = document.getElementById("clock");
        /*var canvasHAST = document.getElementById("canvasHAST");
        //canvasHast= document.body.style.backgroundImage = "/Images/hawaii.jpg";
        var canvasEST = document.getElementById("canvasEST");
        var canvasUTC = document.getElementById("canvasUTC");
        var canvasMSK = document.getElementById("canvasMSK");
        var canvasJST = document.getElementById("canvasJST");*/

        /*context = canvasEST.getContext("2d");
        //var radius = canvasEST.height / 2;
        //ctx.translate(radius, radius);
        //radius = radius * 0.90
        //var background = new Image();
        //background.src = '/Images/hawaii.jpg';
        // Make sure the image is loaded first otherwise nothing will draw.
        //background.onload = function(){
        //    ctx.drawImage(background,50,50);   
        //}​
        //background.src = "/Images/hawaii.jpg";
        //radius = canvasEST.height / 2;
        //ctx.translate(radius, radius);
        //radius = radius * 0.90
        //drawClock("EST");
        setInterval(drawClock, 1000);

        ctxH = canvasHAST.getContext("2d");
        radius = canvasHAST.height / 2;
        ctxH.translate(radius, radius);
        radius = radius * 0.90
        //radius = canvasEST.height / 2;
        //ctx.translate(radius, radius);
        //radius = radius * 0.90
        //drawClock("HAST");
        setInterval(drawClock, 1000);

        ctxU = canvasUTC.getContext("2d");
        radius = canvasUTC.height / 2;
        ctxU.translate(radius, radius);
        radius = radius * 0.90
        //radius = canvasEST.height / 2;
        //ctx.translate(radius, radius);
        //radius = radius * 0.90
        //drawClock("UTC");
        setInterval(drawClock, 1000);

        ctx = canvasMSK.getContext("2d");
        radius = canvasMSK.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        //drawClock("MSK");
        setInterval(drawClock, 1000);

        ctx = canvasJST.getContext("2d");
        radius = canvasJST.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        //drawClock("JST");
        setInterval(drawClock, 1000);*/

        function getClock()
        {
         //Get Current Time
          var d = new Date();
         //var offset = new Date().getTimezoneOffset();
         //d = d - offset;
         //var d = new Date();
          d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000 /* convert to UTC */ + (utcValue) * 60 * 60 * 1000);
          //d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000 /* convert to UTC */ + (/* UTC+8 */ 0) * 60 * 60 * 1000);
          
         //d.setUTCHours(d.getUTCHours() - 7);
         //var utc = d.getTime() + (d.getTimezoneOffset() * 60000);
         //var nd = new Date(utc + (3600000*(-2)));
         //console.log("The local time " + nd.toLocaleString());

         var str = positionZero(d.getHours(), d.getMinutes(), d.getSeconds());
         //Get the Context 2D or 3D
         
         var context = clock.getContext("2d");
         context.clearRect(0, 0, 500, 200);
         //context.font = "80px <span id=\"IL_AD7\" class=\"IL_AD\">Arial</span>";
         context.font = "80px Arial";
         //context.fillStyle = "white";
         context.strokeStyle = "white";
         //context.fillText(str, 42, 125);
         context.strokeText(str, 42, 125);
         //context.font = "12px Arial";
         //context.fillText("\nHawaii", 42, 125);
        }

        /*function getClock2()
        {
          //Get Current Time
          var d = new Date();
          d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000 + (0) * 60 * 60 * 1000);
          var str = positionZero(d.getHours(), d.getMinutes(), d.getSeconds());
          //Get the Context 2D or 3D

          d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000+ ( 8) * 60 * 60 * 1000);
          console.log('UTC+8 Time:', d);
         
          var context = clock.getContext("2d");
          context.clearRect(0, 0, 500, 200);
          //context.font = "80px <span id=\"IL_AD7\" class=\"IL_AD\">Arial</span>";
          context.font = "80px Arial";
          //context.fillStyle = "white";
          context.strokeStyle = "white";
          //context.fillText(str, 42, 125);
          context.strokeText(str, 42, 125);
          //context.strokeText(london, 42, 125);
          
          //context.font = "12px Arial";
          //context.fillText("\nHawaii", 42, 125);
        }*/

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

          //curTime += "Hawaii".toString();

             return curTime;
        }

        //intervalIds.push(setInterval(getClock, 1000));

        var clock = document.getElementById("clock");
        var clock_int = setInterval(getClock, 1000);

        //var clock2 = document.getElementById("clock2");
        //var clock2_int = setInterval(getClock2, 1000);

        //var d = new Date();
        //d.setTime(d.getTime() + d.getTimezoneOffset() * 60 * 1000 /* convert to UTC */ + (/* UTC+8 */ 10) * 60 * 60 * 1000);
        //document.write(d); //test
 

        </script>

        <!--End of Javascript -->
        <br>
        <br>
        <br>

        <!--<img src ="/Images/hawaii.jpg">-->

        <p> <i> Notes: The clocks were drawn on canvases using Javacsript. 
          For a link to the algorithm, see here: ____  </i> </p> 

        <!-- http://www.uiupdates.com/create-digital-clock-using-html5-canvas-and-javascript/-->
      </div>
     </div>

</body>

<?php include('footer.html'); ?>

</html>