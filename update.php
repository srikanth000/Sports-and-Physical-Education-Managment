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
		$id=$_SESSION['user'];
		
		$user=mysql_query("select * from signup where UID='$id'");
		
		
?>	
	<div id="trend">
<h2 class="w3-center">Trending...</h2>
<div class="w3-container">
<div class="w3-border">
<ul class="w3-navbar w3-theme">
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'tech')">Tech</a></li>
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'gb')">Global</a></li>
  <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'sp')">Sports</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'cs')">Compuer_Scince</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'sm')">Social_Media</a></li>
	 <li><a class="w3-btn w3-theme testbtn" onclick="openCity(event, 'so')">Others</a></li>
</ul>

<div id="tech" class="w3-container city w3-animate-opacity">
  <h2>Technical</h2>
  <p><a href="http://www.thehindu.com/sci-tech/technology/internet/Only-a-quarter-of-world%E2%80%99s-Internet-users-got-free-access-in-2016/article16954373.ece"  target="_blank"> Only a quarter of the world’s internet users got free access in 2016: report </a> </p>
  <p><a href="http://www.thehindu.com/sci-tech/technology/%E2%80%9861-people-check-their-phones-within-5-minutes-of-waking-up%E2%80%99/article16956184.ece" target="_blank">61% people check their phones within 5 minutes of waking up’</a>  </p>
</div>

<div id="gb" class="w3-container city w3-animate-opacity">
  <h2>Global_News</h2>
  <p> <a href="http://www.thehindu.com/news/international/Magnitude-6.2-earthquake-hits-region-in-eastern-Indonesia/article16963221.ece" target="_blank">Magnitude 6.2 earthquake hits region in eastern Indonesia</a>  </p> 
  <p><a href="http://www.thehindu.com/news/international/Obama-acts-tough-against-Russia/article16963226.ece" target="_blank">Obama acts tough against Russia </a> </p>
</div>

<div id="sp" class="w3-container city w3-animate-opacity">
  <h2>Sports</h2>
  <p><a href="http://www.thehindu.com/sport/cricket/Starc-shines-as-Australia-pulls-off-a-stunning-last-day-win-over-Pak./article16963171.ece" target="_blank" >>Starc shines as Australia pulls off a stunning last day win over Pak.</a> </p>
  <p><a href="http://www.thehindu.com/sport/football/Another-season-of-I-League-rolled-out/article16949905.ece" target="_balnk">Another season of I-League rolled out</a>  </p>
	</div>
<div id="cs" class="w3-container city w3-animate-opacity">
  <h2>Computer_Science</h2>
	<center><p>updated Soon....</p></center>
	</div>
<div id="sm" class="w3-container city w3-animate-opacity">
  <h2>Social_NetWorking</h2>
	<center><p>updated Soon....</p></center>
	</div>
<div id="so" class="w3-container city w3-animate-opacity">
  <h2>Other</h2>
	<center><p>updated Soon....</p></center>
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

<?php include('footer.php');?>
</body>
</html>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
