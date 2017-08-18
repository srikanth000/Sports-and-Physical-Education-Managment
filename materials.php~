<?php
                
              	session_start();
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		
		
		//session_start();
				//echo $q[0];
		//$_SESSION['user']
		if(isset($_POST['login']))
		{
			//echo "sdf";
			
			$user=$_POST['usrname'];
			$pwd=$_POST['psw'];
			$q1=mysql_query("select * from signup where UID='$user'  and password='$pwd'");
			$q=mysql_fetch_array($q1);
			//echo $q1;
		
			if($q1>0)//if($q[3]==$user && $q[5]==$pwd)
			{
				//session_start();
				echo $q[0];
				$_SESSION['user'] =$q[3];	
				
				//header('Location:materials.php'); 
			}
			else
			{
				
				echo "failed";
				session_destroy();
				echo '<script language="javascript">';
				echo 'alert("username or pwd wrong")';
				//header('Location:index.php'); 
			
			}
		}
		
?>

<html>
<head lang="en">
    	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
   	  <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	 <script src="lib/jquery/jssor.slider.mini.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<!--Semantic Ui!-->
		

  <!--- Component CSS -->
 
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/card.css">
 
<link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  

  <!--- Component JS -->
  
  
  <script type="text/javascript" src="dist/components/transition.js"></script>

  <!--- Show Names -->

	<link rel="stylesheet" href="css/w3.css">
 <script>
  $(document)
    .ready(function() {
      $('.special.card .image').dimmer({
        on: 'hover'
      });
      $('.star.rating')
        .rating()
      ;
      $('.card .dimmer')
        .dimmer({
          on: 'hover'
        })
      ;
    })
  ;
  </script>
   	 <title></title>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}
 
  .spaced > .button {
    margin-bottom: 1em;
  }

    /* entire container, keeps perspective */


.flip-container {
  position: absolute;
  perspective: 1000;
  top: 50%;
  left: 50%;
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.flip-container:hover .flipper,
.flip-container.hover .flipper {
  transform: rotateY(180deg);
}
.flip-container,
.flip-container .front,
.flip-container .back {
  -moz-border-radius: 100px;
  -webkit-border-radius: 100px;
  border-radius: 100px;
  width: 100px;
  height: 100px;
  overflow: hidden;
}
.flip-container .flipper {
  transition: 0.6s;
  transform-style: preserve-3d;
  position: relative;
}
.flip-container .flipper .front,
.flip-container .flipper .back {
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}
.flip-container .flipper .front {
  z-index: 2;
  transform: rotateY(0deg);
}
.flip-container .flipper .back {
  transform: rotateY(180deg);
}
#title {
    width_auto;
height_auto;
}
 .fixnav{
position:fixed;
top:0;
z-index:12; 
 }
@media screen and (max-width: 768px) {
    h1{
        font-size:25px;
    }
}
#menu
{
	 width: 100%; text-align: center;
}
</style>
</head>
<body>
<header role="banner" id="top">
<div id="header-text">
   <center><h1 id="title">Sports & Physical Education</h1></center>
</div>
<div id="menu" class="w3-center">
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="#">Logo</a>!-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Sports</a></li>
        <li  class="active"><a href="materials.html">Materials</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Physical Edu.</a></li>
 <li><a href="#">e-Complaint</a></li>
        <li><a href="#">Contact Us</a></li>
     
        <?php
		
		
		if(isset($_SESSION['user']))
		{
			//session_start();
			$u=$_SESSION['user'];
			$q1=mysql_query("select * from signup where UID='$u'");
			$q=mysql_fetch_array($q1);
			if($q1>0)
			{
					echo ' <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">'."".$q[1]." ".$q[2].'
				<span class="glyphicon glyphicon-user"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="logout.php">logout</a></li>
				  
				  <li><a href="#">Profile</a></li> 
				</ul>
			      </li>';
			}
		}
		else
		{
		echo ' <li class="nav_button"><center> <button onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Loginn</button></li>';
		
		}
		
		
	?>
      </ul>
    </div>
  </div>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-modal-content w3-animate-top" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/male_photo.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required><br>
	<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me<br>
          <button class="w3-btn-medium w3-blue  w3-padding" type="submit" name="login">Login</button>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>
</nav>
</div>
<br>
<!-- materials !-->

<div class="container text-center">    
  <h3>Materials</h3>
  <br>
  <div class="row">
<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Contact Us</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Send </button>
</p>
</form>

</div>
<!--    <div class="col-sm-3">
      <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	    	<div class="flipper">

			<div class="front" style="background-image:url('img/cricket.jpeg');">
			<label class="w3-label w3-text-blue " style="text-align:left;"><b>Cricket</b></label>
		   			
	       		 </div>
			
		<div class="back">
			
	    		 <div class="ui inverted segment">
	    			<?php 
					echo '<button  id="c" value="cricket" onclick="document.getElementById(\'id03\').style.display=\'block\'"  class="ui inverted blue button">Show Availble</button><br>';
				?>
	    		</div>
			
			
			<?php
			if(isset($_SESSION['user']))
			{
				//session_start();
				$u=$_SESSION['user'];
				$q1=mysql_query("select * from signup where UID='$u'");
				$q=mysql_fetch_array($q1);
				if($q1>0)
				{
					echo '<div class="ui inverted segment">';
	    				echo '<button  id="c"  onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Request Material</button><br>';
					echo '</div>';
					echo '<div class="ui inverted segment">';
	    				echo '<button  id="c"  onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Submission</button><br>';
					echo '</div>';
				}
				
			}
			else
				{
						echo '<div class="ui inverted segment">';
						echo '<button  id="c"  onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Request Material</button><br>';
						echo '</div>';
						echo '<div class="ui inverted segment">';
		    				echo '<button   id="c" onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Submission</button><br>';
						echo '</div>';
				
				}
			?>
	    		
	
		
		</div>
	</div>
	</div>
    </div>
    <div class="col-sm-3"> 
      <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	    	<div class="flipper">

			<div class="front" style="background-image:url('img/football.jpeg');">
			<label class="w3-label w3-text-blue " style="text-align:left;"><b>Football</b></label>
		   
	       		 </div>
		<div class="back">
			<center>
	    		 <div class="ui inverted segment">
	    				<?echo '<button  id="c"  value="football" onclick="document.getElementById(\'id03\').style.display=\'block\'"  class="ui inverted blue button">Show Availble</button><br>';?>
	    		</div>
			<center>
			
			<?php
			if(isset($_SESSION['user']))
			{
				//session_start();
				$u=$_SESSION['user'];
				$q1=mysql_query("select * from signup where UID='$u'");
				$q=mysql_fetch_array($q1);
				if($q1>0)
				{
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Request Material</button><br>';
					echo '</div>';
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Submission</button><br>';
					echo '</div>';
				}
				
			}
			else
				{
						echo '<div class="ui inverted segment">';
						echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Request Material</button><br>';
						echo '</div>';
						echo '<div class="ui inverted segment">';
		    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Submission</button><br>';
						echo '</div>';
				
				}
			?>
	    		
	
		
		
		</div>
	</div>
	</div>
	</div>
	<div class="col-sm-3"> 
      	<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	    	<div class="flipper">

			<div class="front" style="background-image:url('img/basket.jpeg');">
			
			<label class="w3-label w3-text-blue " style="text-align:left;"><b>Baketball</b></label>
		   
	       		 </div>
		<div class="back">
			<center>
	    		 <div class="ui inverted segment">
	    				<button class="ui inverted blue button">Show Availble</button><br>
	    		</div>
			<center>
			
			<?php
			if(isset($_SESSION['user']))
			{
				//session_start();
				$u=$_SESSION['user'];
				$q1=mysql_query("select * from signup where UID='$u'");
				$q=mysql_fetch_array($q1);
				if($q1>0)
				{
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Request Material</button><br>';
					echo '</div>';
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Submission</button><br>';
					echo '</div>';
				}
				
			}
			else
				{
						echo '<div class="ui inverted segment">';
						echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Request Material</button><br>';
						echo '</div>';
						echo '<div class="ui inverted segment">';
		    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Submission</button><br>';
						echo '</div>';
				
				}
			?>
	    		
	
		
		
		</div>
	</div>
	</div>
	</div>
	<div class="col-sm-3"> 
      	<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	    	<div class="flipper">
			<div class="front">
		   
	       		 </div>
		<div class="back">
			<center>
	    		 <div class="ui inverted segment">
	    				<button class="ui inverted blue button">Show Availble</button><br>
	    		</div>
			<center>
			
			<?php
			if(isset($_SESSION['user']))
			{
				//session_start();
				$u=$_SESSION['user'];
				$q1=mysql_query("select * from signup where UID='$u'");
				$q=mysql_fetch_array($q1);
				if($q1>0)
				{
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Request Material</button><br>';
					echo '</div>';
					echo '<div class="ui inverted segment">';
	    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui inverted blue button">Submission</button><br>';
					echo '</div>';
				}
				
			}
			else
				{
						echo '<div class="ui inverted segment">';
						echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Request Material</button><br>';
						echo '</div>';
						echo '<div class="ui inverted segment">';
		    				echo '<button    onclick="document.getElementById(\'id02\').style.display=\'block\'"  class="ui disabled button">Submission</button><br>';
						echo '</div>';
				
				}
			?>
	    		
	
		
		
		</div>
	</div>
	</div>
<h1></h1>
  <br>
	 <br>
<br>

	
  </div>
</div>!-->

<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-6 w3-modal-content w3-animate-top" style="max-width:600px">
	 <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <div class="w3-center"><br>
       
        <img src="img/male_photo.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
	
	<br>
		<br>
      </div>
		<label class="w3-label w3-text-blue " style="text-align:left;"><b><?php echo $q[1]." ".$q[2];?></b></label>
		<form class="w3-container" action="/action_page.php">
		  	<p>
		    	<label class="w3-label w3-text-blue w3-left" style="text-align:left;"><b>Select Item</b></label>
		    	 <select class="w3-select" name="option">
		  <option value="" disabled selected>Choose your option</option>
		  <option value="1">Option 1</option>
		  <option value="2">Option 2</option>
		  <option value="3">Option 3</option>
		</select>
		    	</p>
		    <p>      
		    <label class="w3-label w3-text-blue w3-left"><b>No.Of.Materials</b></label>
		    <input class="w3-input w3-border w3-white" name="first" type="text"></p>
		    <p>      
		    <label class="w3-label w3-text-blue w3-left"><b>submission date</b></label>
		    <input class="w3-input w3-border w3-white" name="last" type="text" ></p>
		    <p>
		    <button class="w3-btn w3-green w3-left">Submit</button></p>
			
		  </form>
		<h1></h1>
		<h1></h1>
    </div>
</div>
<div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-6 w3-modal-content w3-animate-top" style="max-width:600px">
	 <span onclick="document.getElementById('id03').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <div class="w3-center"><br>
       
        <img src="img/male_photo.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
	
	<br>
		<br>
      </div>
		<label class="w3-label w3-text-blue " style="text-align:left;"><b><?php echo $q[1];?></b></label>
	<!--<?php
		echo '<script language="javascript">';
		echo 'document.getElementById(\'c\').value';
		echo '</script>';
	?>!-->
	<?php 	
	echo $Var=
		'<script>
		var s=document.getElementById(\'c\').value;
		document.write(""+s);
	</script>';
	echo $Var;
	?>
		
    </div>
</div>

<br>
<br>
<br>
<footer class="container-fluid text-center">

  
  <form class="form-inline">Get Event Updates
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
	<p>Sports & Physical Edu. Copyright</p>  
  </form>
</footer>
<script>

$(window).scroll(function ()

    {     
        if ( $(window).scrollTop() > 120)
        {
            $("#menu").addClass("fixnav");
        }
        else  if ($(window).scrollTop() < 200)
        {
            $("#menu").removeClass("fixnav");
        }
    });
</script>
</body>
</html>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
