 <?php
                
              session_start();
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		if(isset($_POST['login']))
		{
			$user=$_POST['usrname'];
			$pwd=$_POST['psw'];
			$q1=mysql_query("select * from signup where UID='$user'  and password='$pwd'");
			$q=mysql_fetch_array($q1);
			//echo $q1;
		
			if($q1>0)//if($q[3]==$user && $q[5]==$pwd)
			{
				
				//echo $q[0];
				$_SESSION['user'] =$q[3];	
				
				//header('Location:index.php'); 
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
    	<script src="lib/bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
    	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
   	 <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	 <script src="lib/jquery/jssor.slider.mini.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<!--Semantic Ui!-->
		
   	 <title></title>
<style>
  .jumbotron {
  margin-bottom: 0px;
  height: -0px;
  color:black;
background-position: 0% 35%;
background-color: black;
    background-size: cover;
    background-repeat: no-repeat;
  
 background:transparent;
background:url('main1.jpeg') ;
}
#header-text{
 margin-top: 0px;
  height:70px;
  border:2px solid;    
padding:0px;
 background-repeat: no-repeat;

 }
#title {
    width_auto;
height_auto;
}
 .fixnav{

position:fixed;
top:0;
z-index:12;;   
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
<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar">SPP</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="#">Logo</a>!-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="materials.php">Materials</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Physical Edu.</a></li>
 <li><a href="#">e-Complaint</a></li>
        <li><a href="#">Contact Us</a></li>
     
	<?php
		//session_start();
		//echo $_SESSION['user'];
		if(isset($_SESSION['user']))
		{
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
		echo ' <li class="nav_button"><center> <button onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>';
		
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
          <label class="w3-left"><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label class="w3-left"><b>Password</b></label>
          <input class="w3-input w3-border w3-left" type="password" placeholder="Enter Password" name="psw" required><br>
	<input class="w3-check w3-margin-top " type="checkbox" checked="checked" > Remember me<br>
          <button class="w3-btn-medium w3-blue  w3-padding" type="submit" name="login">Login</button>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red w3-left">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>
</nav>
</div>
<br>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 text-right">
      

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
   	 <script src="js/jssor.slider-22.2.16.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };

    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    </style>
    	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:456px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:356px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/01.jpg" />
                <img data-u="thumb" src="img/thumb-01.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/02.jpg" />
                <img data-u="thumb" src="img/thumb-02.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/03.jpg" />
                <img data-u="thumb" src="img/thumb-03.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/04.jpg" />
                <img data-u="thumb" src="img/thumb-04.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/05.jpg" />
                <img data-u="thumb" src="img/thumb-05.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/06.jpg" />
                <img data-u="thumb" src="img/thumb-06.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div>
                <img data-u="image" src="img/07.jpg" />
                <img data-u="thumb" src="img/thumb-07.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/08.jpg" />
                <img data-u="thumb" src="img/thumb-08.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/09.jpg" />
                <img data-u="thumb" src="img/thumb-09.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/10.jpg" />
                <img data-u="thumb" src="img/thumb-10.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/11.jpg" />
                <img data-u="thumb" src="img/thumb-11.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/12.jpg" />
                <img data-u="thumb" src="img/thumb-12.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    </div>
	
    <div class="col-sm-4 sidenav " id="side">
	 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<li class="w3- #f2f2f2 w3-medium w3-padding-8 "><label class="w3-label w3-text-blue"><a href="next.html">Recent News &amp; Updates</b></label></b> </a><input class="w3-input w3-border w3-padding w3-hover-cyan w3-hover-text-white" type="text" placeholder="Search for notice.." id="myInput" onkeyup="myFunction()">
	<a class="btn-block" href="../notice/index"></i>
		
    	</a>
</li>
	<ul type="1" id="myUL" class="w3-center">
	<li>
		<button class="accordion " >
    
    09, Mar 2017: Training & Placement Cell/NB/16-17/300: Scheduled Online Test By on 10-03-2017

</button>
		<div class="panel">
		  <p>.    09, Mar 2017: Training & Placement Cell/NB/16-17/300: Scheduled Online Test By on 10-03-2017    09, Mar 2017: Training & Placement Cell/NB/16-17/300: Scheduled Online Test By on 10-03-2017    09, Mar 2017: Training & Placement Cell/NB/16-17/300: Scheduled Online Test By on 10-03-2017</p>
		</div>
	</li>
	<li>
		<button class="accordion" >Update_1</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >Update_1</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >Update_1</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >cricket</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >Update_1</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >cricket</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >Update_1</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	<li>
		<button class="accordion" >cricket</button>
		<div class="panel">
		  <p>Lorem ipsum...</p>
		</div>
	</li>
	</ul>
     </div>
     
    </div>
  </div>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.getElementById("side").scrollTop > 10 || document.documentElement.scrollTop > 0) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.getElementById("side").scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
$(window).scroll(function ()

    {     
        if ( $(window).scrollTop() > 200)
        {
            $("#menu").addClass("fixnav");
        }
        else  if ($(window).scrollTop() < 200)
        {
            $("#menu").removeClass("fixnav");
        }
    });
</script>

<br>

	
<footer class="container-fluid text-center">

  
  <form class="form-inline">Get Event Updates
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
	<p>Sports & Physical Edu. Copyright</p>  
  </form>
</footer>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
