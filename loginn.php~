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
    
	<script src="js/main.js"></script>
    	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
   	 <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
	 <script src="lib/jquery/jssor.slider.mini.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.js"></script>
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
S
</style>
</head>
<body>
<?php include('header.php');?>

<?php include('footer.php');?>
</body>


 
      



