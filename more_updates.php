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
		<script src="lib/bootstrap/js/bootstrap.js"></script>
		
	<!--Semantic Ui!-->
<style>

pre code {
    padding: 0;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
}
code {
    padding: 2px 4px;
        padding-top: 2px;
        padding-right: 4px;
        padding-bottom: 2px;
        padding-left: 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
}
code, kbd, pre, samp {
    font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
}
code, kbd, pre, samp {
    font-family: monospace,monospace;
    font-size: 1em;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
pre {
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
}
</style>
   	 <title></title>
<?php include('header.php');?>

<div class="col-sm-12 " id="side">
	 
	<center><li class="w3- #f2f2f2 w3-medium w3-padding-8 "><label class="w3-label w3-text-blue w3-large"><a href="next.html">Recent News &amp; Updates</b></label></b> </a></center>
<div class="col-sm-3">
</div>
<div class="col-sm-3">
</div>
<div class="col-sm-3">
</div>
<div class="col-sm-3">
<div class="search">
<input class="w3-input w3-border w3-padding w3-hover-cyan w3-hover-text-white " type="text" placeholder="Search for notice.." id="myInput" onkeyup="myFunction()">
</div>
</div>
<br>
	<br><br>
	<a class="btn-block" href="../notice/index"></i>
		
    	</a>
</li>
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("se");
		
		$user=mysql_query("select * from notify ORDER BY id DESC;");
		
		
?>
	<ul type="1" id="myUL" >
	<?php 
			$i=5;
			
			while($user_detail=mysql_fetch_array($user))
			{
				//if($i!=0)
				{
				$date=$user_detail[1];
				$news_i=$user_detail[2];
				$news=$user_detail[3];
				$sub=$user_detail[4];
				//echo $name;
				
			
	?>
	<li>
		<button class="accordion "   style="background-color:white;border:1px solid">
    		
    		<font color="#810404"><?php echo $date;?></font>::<font class="w3-text-blue"><?php echo $news_i;?></font>

		</button>
	
		<div class="panel"  style="border: 1px solid #dddddd;">
		
		<div class="panel-body">
		<pre><code>
				<?php echo $news;?>
		</code>
		</pre>
		</div>
		</div>
	</li>
	<?php
		
		$i--;
		}
		}

	?>
	</ul>
	
<br>

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
    if (document.getElementById("sid").scrollTop > 10 || document.documentElement.scrollTop > 0) {
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
		 $("#search").addClass("fixnav2");
		
        }
        else  if ($(window).scrollTop() < 200)
        {
            $("#menu").removeClass("fixnav");
		  $("#search").removeClass("fixnav2");
		
        }
	
    });

</script>

<?php include('footer.php');?>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
