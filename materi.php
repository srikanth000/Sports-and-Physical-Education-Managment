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
		
   	 <title></title>
<?php include('header.php');?>



</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html><?php
                
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
				$_SESSION['user'] =$q[2];	
				
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
		if(isset($_POST['submittt']))
		{
			
			echo "<script>";
			echo "alert('under process')";
			echo "</script>";
			
		}
?>
<html>
<head lang="en">
    	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    
	<script src="js/main.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
   	 <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	 <script src="lib/jquery/jssor.slider.mini.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.js"></script>
	<!--Semantic Ui!-->
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

<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select Sport  first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Sports  first</option>');
            $('#city').html('<option value="">Select Sport Item </option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
</head>
<body>
	<div class="container">
	<div class="w3-center">
	
		<h2 style="font-color:blue">Materials</h2>
	<center>
	<?php
			
                          
			if(isset($_POST['submit1']))
			{
				$name=$_SESSION['user'];
				mysql_connect("localhost","root","");
				mysql_select_db("newdb");
				$m=$_POST['state'];
				$g=$_POST['country'];
				$n=$_POST['city'];
				//$user=mysql_query(";");
				 $n;
				$q2=mysql_query("select * from countries where country_id=$g");
				$q22=mysql_fetch_array($q2);
				 $game=$q22[1];
				$q1=mysql_query("select * from states where state_id=$m");
				$q11=mysql_fetch_array($q1);
				 $mat=$q11[1];
				 $c=$q11[3];
				mysql_select_db("request");
				$q=mysql_query("insert into request values('$name','$game','$mat',$n,$c,0,$g)");	
				echo "<h4 color=\"blue\">Your Request Submitted Successfully..</h4>";
				
				
				
			}
		?>
	 <div class="w3-card-4" style="width:50%;">
     <div class="w3-container">
	 <center>
    <?php
    //Include database configuration file
    include('dbConfig.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<br>
	<br>
	<form action="" method="post">
	 <div class="col-xs-12">
	
    <select name="country" id="country" class="form-control">
        <option value="name">Select Sports</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['country_id'].'" class="form-control">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value="" class="form-control">Material is  not available</option>';
        }
        ?>
   

</select>
	<br>
	
    <div class="form-group">
    <select name="state" id="state" class="form-control" name="state">
        <option value="">Select Sport Item</option>
    </select>
    <br>
    <select name="city" id="city" class="form-control" >
       <option value="">Avilability of Material</option>
    </select>
	<br>
	<?php
	if(isset($_SESSION['user']))
	{
		echo '<select name="city" id="city" class="form-control" name="city" >
       <option value="">Number of Materials</option>
	<option value="1">1</option>
    </select>';
	}
	else
	echo '<select name="city" id="city" class="form-control" disabled="disable">
       <option value="">Number of Materials</option>
	<option value="1">1</option>
    </select>';
?>
	
	<br><br>
<?php
	if(isset($_SESSION['user']))
	{
		echo '<button type="submit"  class="btn btn-success" name="submit1" id="submit"">Request Material</button>';
	}
	else
	echo '<button type="submit"  class="btn btn-success" disabled="disabled">Request Material</button>';
?>

<button type="reset" class="btn btn-info" onclick="resetAll()">reset</button>
	
	</div>
    </div>
	</div>
	</div>
	</form>


<br>
<br>
<br>
</div>
</div>

</div>

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
$('.content').on('click', function () {
    $('.content').transition({
        animation: 'jiggle',
        duration: 500,
        useFailSafe: true,
        allowRepeats: false,
        queue : false
    });
});
function resetAll()
{
    var selects = document.getElementsByTagName('select');
    var len = selects.length;
    for(var i=0; i<len; i++){
        selects[i].selectedIndex=0;
    }
}

</script>
<?php include('footer.php');?>
</body>
</html>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
