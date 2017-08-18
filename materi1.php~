 <?php
                
             //include('login.php');
	$s=0;
               
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("newdb");
		  if(isset($_GET['id']))
                {
			$u1= $_GET['id'];
			
			$q=mysql_query("select * from request where user='$u1'");
			$q1=mysql_fetch_array($q);
			$remain=$q1[4]-$q1[3];
			$status=1;
			$id=$q1[6];
			$m=$q1[2];
			$g=$q1[1];
			
			$update=mysql_query("update request set remain=$remain,status=$status  where user='$u1' and id='$id'");
			
			if($update>0)
			echo "";
			else
			die(mysql_error());
			$update1=mysql_query("update  states set status=$remain  where country_id='$id' and state_name='$m'");
			$s=1;
			
		}
               
               
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
 <?php include('login.php');?>
<?php include('header.php');?>



</body>

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
<?php
		mysql_connect("localhost","root","");
		mysql_select_db("newdb");
		
		$user=mysql_query("select * from request where status=0;");
		
		
		
?>
<div class="container">
<br>
<center><h2>Material Requests</h2></center>
<br>
<?php
	$s=1;
	echo "Succefully accepted";
?>
<table class="table table-hover">
    <thead>
      <tr>
	<th>UserName</th>
        <th>Game</th>
        <th>Material</th>
        <th>Counts</th>
	<th>Remaning</th>
	<th>Action</th>
      </tr>
    </thead>
	<tbody>
	<tr>
<?php 
			$i=5;
			
			while($u=mysql_fetch_array($user))
			{
				//if($i!=0)
				
			?>	
			<td><?php echo $u[0];?></td>
			<td><?php echo $u[1];?></td>
			<td><?php echo $u[2];?></td>
			<td><?php echo $u[3];?></td>
			<td><?php echo $u[4];?></td>
     			<td>		
			
			<!--<input type="hidden" value="<?php echo $u[0];?>" name="user">	
	!-->
	<?php
				echo "<button type='submit' class='btn btn-success' name='accept'><a href='materi1.php?id=".$u['0']."'>Accept</a></button>";
				?>&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-success" name="accept">Reject</button>
	
			</td>	
			
	
	</tr>
	<?php
		if($u==0)
		echo "nope";
	}?>
	</tbody>
	</table>
	

<br><br>
</div>
<?php include('footer.php');?>
</body>
</html>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_webpage&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT --!
  <li> <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-medium"><span class="glyphicon glyphicon-log-in"></span>Login</button></li>>

</html>

</body>
</html>
