<!DOCTYPE html>
<html>
<head>
<style>
.body{
	background-color:#333;
}
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
	width:200px;
  position: absolute;
 top: 40%;
  left: 135%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #ccc;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
visibility:hidden;
opacity:50%;
}
.container .btn1 {
	width:200px;
  position: absolute;
 top: 40%;
  left: 135%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #ccc;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
visibility:hidden;
opacity:50%;
}

.container .btn2 {
	width:200px;
  position: absolute;
  top: 35%;
  left: 270%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#ccc;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  visibility:hidden;
  opacity:50%;
}
.container .btn21 {
	width:200px;
  position: absolute;
  top: 35%;
  left: 270%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#ccc;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  visibility:hidden;
  opacity:50%;
}
.container .bn {
	width:300px;
	height:50px;
  position: absolute;
 top: 70%;
  left: 190%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #CCC;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
visibility:hidden;
opacity:50%;
}


.container .bt {
	width:300px;
	height:50px;
  position: absolute;
   top: 80%;
  left: 190%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#ccc;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  visibility:hidden;
  opacity:50%
}


.container .btn:hover {
  background-color: white;
  color: black;
}
.container .btn1:hover {
  background-color: white;
  color: black;
}
.container .btn2:hover {
  background-color: white;
  color: black;
}
.container .btn21:hover {
  background-color: white;
  color: black;
}
.container .bt:hover {
  background-color: white;
  color: black;
}
.container .bn:hover {
  background-color: white;
  color: black;
}
.bar1{
	position:absolute;
	top:90%;
	left:180%;
}
.bar2{
	position:absolute;
	top:90%;
	left:164%;
}
.bar3{
	position:absolute;
	top:90%;
	left:194%;
}
#myDIV {
	position:absolute;
	top:-5%;
	left:5%;
  width: 1400px;
  height:720px;
  padding: 50px 0;
  text-align: center;
  background-color:#999;
  opacity:90%;
  margin-top: 20px;
  visibility:;
  cursor:crosshair;
}


</style>
</head>
<body style="background-color:#000;">

<a href="indexUser.php" style="font-family:Verdana, Geneva, sans-serif;font-size:10px;color:#FF0;text-decoration:none;">PROJECT</a>
<Br>
<a href="game1.php" style="font-family:Verdana, Geneva, sans-serif;font-size:10px;color:#FF0;text-decoration:none;">Back</a>


<div class="container">
<video id="myVideo" autoplay  ontimeupdate="myFunction()" style="width:1500px;height:680px;"  autoplay>
  <source src="../kentnoclick.mp4" id="vid" >
  
  
 </embed>
  </video>
  
<div class="butt">
  <a href="game5(wrong2).php">
  <button class=" butt btn" id="but">LEFT</button>
  </a>
  <a href="game5right2.php">
  <button class=" butt btn1" id="butq">LEFT</button>
  </a>
  
  <a href="game5(wrong).php">
  <button class="butt btn2" id="bot">RIGHT</button>
  </a>
  <a href="game5right.php">
  <button class="butt btn21" id="botq">RIGHT</button>
  </a>
  <a href="game1.php">
  <button class=" butt bt" id="bop">BACK TO MENU</button>
  </a>
  <a href="game2.php">
  <button class="butt bn" id="bo">TRY AGAIN</button>
  </a>
  <button onclick="playvideo()" id="myDIV" style="font-size:200px;display:none;">TAP TO START</button>
  </div>
 <center>
 <button onClick="playvideo()" class="bar1"type="button" style="display:none;">Play</button>
 <button onClick="pausevideo()" class="bar2" type="button" style="display:none;")>pause</button>
 <button onclick="setCurTime()" class="bar3" type="button" style="display:none;">Replay</button><br> 
 </center>

 

  <script>
  var oi = document.getElementById("myVideo"); 
 vid.ontimeupdate = function() {myFunction()};
 function myFunction(){
	 var x = document.getElementById("but");
 if ((oi.currentTime >=9) && (oi.currentTime <=11.5)) {
   x.style.visibility = "visible";
  } else{
	   x.style.visibility = "hidden";
  }
  var c = document.getElementById("butq");
 if ((oi.currentTime >=11.5) && (oi.currentTime <=13.7)) {
   c.style.visibility = "visible";
  } else{
	   c.style.visibility = "hidden";
  }
 
 var y = document.getElementById("bot");
if ((oi.currentTime >=11.5) && (oi.currentTime <=13.7)) {
   y.style.visibility = "visible";
  } else{
	   y.style.visibility = "hidden";
  }
  var v = document.getElementById("botq");
 if ((oi.currentTime >=9) && (oi.currentTime <=11.5)) {
   v.style.visibility = "visible";
  } else{
	   v.style.visibility = "hidden";
  }
   var p = document.getElementById("bo");
 if (oi.currentTime >=19)  {
   p.style.visibility = "visible";
  } else{
	   p.style.visibility = "hidden";
  }
 
 var o = document.getElementById("bop");
if (oi.currentTime >=19) {
   o.style.visibility = "visible";
  } else{
	   o.style.visibility = "hidden";
  }

  

 }
  var xa = document.getElementById("myDIV");
 vid.ontimeupdate = function() {myFunction()};
  function playvideo() {
  var xa = document.getElementById("myDIV");
 if (oi.currentTime>=0) {
    xa.style.visibility = "hidden";
  } else {
   xa.style.visibility = "visible";
  }
   oi.play(); 
} 

  var vid = document.getElementById("myVideo");
function enableAutoplay() { 
  vid.autoplay = true;
  vid.load();
} 
 



 

function pausevideo() { 
  oi.pause(); 
} 

function setCurTime() { 
  oi.currentTime=0;
} 
</script> 

	 
  
 
      

	
 

  
	
	

</body>
</html>
