 <?php
              
             include('login.php');
		
?>
<html>
<head lang="en">
    	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <script src="js/signup.js"></script>
	<script src="js/43main.js"></script>
    	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
   	 <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	 <script src="lib/jquery/jssor.slider.mini.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/signup.js"></script>
		<script src="lib/bootstrap/js/bootstrap.js"></script>
		
	<!--Semantic Ui!-->
		
   	 <title></title>
<?php include('header.php');?>
<div class="container">
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("se");
		//$id=$_SESSION['user'];
		
		//$user=mysql_query("select * from signup where UID='$id'");
		
		
?>	
	<div id="trend">
<h2 class="w3-center">Sports...</h2>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-theme">
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'tech')">Cricket</a></li>
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'gb')">BasketBall</a></li>
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'sp')">Football</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'cs')">Vollyball</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'sm')">Tennis</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'so')">Kabaddi</a></li>
<!--	  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'o')">Others</a></li>-->
</ul>

<div id="tech" class="w3-container city w3-animate-opacity">
  <h2>Cricket</h2>
    <p class="text">
                        Cricket is a bat-and-ball game.<br> played between two teams of eleven players on a cricket field, <br>at the centre of which is a rectangular 22-yard-long pitch with a wicket (a set of three wooden stumps) at each end.<br> One team bats, attempting to score as many runs as possible, whilst their opponents field.
                    </p>
</div>

  
</div>
<div id="gb" class="w3-container city w3-animate-opacity">
  <h2>Basketball</h2>
    <p class="text">
                Basketball is a non-contact team sport played on a rectangular court by two teams of five players each. <br>The objective is to shoot a ball through a hoop 18 inches (46 cm) in diameter and 10 feet (3.048 m) high that is mounted to a backboard at each end of the court. <br>The game was invented in 1891 by Dr. James Naismith, who would be the first basketball coach of the Kansas Jayhawks, one of the most successful programs in the game's history.</p>
                         </p>
</div>

</div>
<div id="sp" class="w3-container city w3-animate-opacity">
  <h2>Football</h2>
      <p class="text">Football is a family of team sports that involve, to varying degrees, kicking a ball with the foot to score a goal. <br>Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears.<br> Sports commonly called 'football' in certain places include: association football (known as soccer in some countries);<br> gridiron football (specifically American football or Canadian football); <br>Australian rules football; rugby football (either rugby league or rugby union); and Gaelic football.[1][2] These different variations of football are known as football codes.</p>
                    
  	</div>
<div id="cs" class="w3-container city w3-animate-opacity">
  <h2>Volley Ball</h2>
	<center><p class="text">Volleyball is a team sport in which two teams of six players are separated by a net. <br>Each team tries to score points by grounding a ball on the other team's court under organized rules.<br> It has been a part of the official program of the Summer Olympic Games since 1964.
            </p></center>
	</div>
<div id="sm" class="w3-container city w3-animate-opacity">
  <h2>Tennis</h2>
	<center><p class="text">Tennis is a racket sport that can be played individually against a single opponent (singles) or between two teams of two players each (doubles). <br>Each player uses a tennis racket that is strung with cord to strike a hollow rubber ball covered with felt over or around a net and into the opponent's court.<br> The object of the game is to play the ball in such a way that the opponent is not able to play a valid return. <br>The player who is unable to return the ball will not gain a point, while the opposite player will.
</p></center>
	</div>
<div id="so" class="w3-container city w3-animate-opacity">
  <h2>Kabaddi</h2>
	<center><p class="text">Kabaddi is a contact team sport that originated in Indian subcontinent in Tamil Nadu.<br>It is popular in South Asia and is the state game of the Indian states of Tamil Nadu, Maharashtra, Bihar, Andhra Pradesh, Telangana and Punjab. <br>It is also the national sport of Bangladesh.
            </p></center>
	</div>
</div>
</div>
</div>
</div>
<script>
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-theme-dark", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-theme-dark";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
</script>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<?php include('footer.php');?>
</body>
</html>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
