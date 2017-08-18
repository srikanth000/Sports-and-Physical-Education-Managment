<?php
                
      $dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'se';
$s=1;

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection faied: " . $db->connect_error);
}
if(isset($_GET['id']))
{
	$s=$_GET['id'];
	
	
}
if(isset($_POST['register']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("se");
	$name=$_POST['name'];
	$ename=$_POST['ename'];
	$id=$_POST['id'];
	$q=mysql_query("insert into eventsR(username,id,eventname) values('$name','$id','$ename')");
	if(!$q)
	die(mysql_error());
	else
	header('Location:events.php');
	
}
		
?>
<html>
    <head>
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
     
</style>

    </head>
	<body>

<?php include('login.php');?>
		<?php include('header.php');?>
        <!--
        Home Slider
        ==================================== -->
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("se");
		$user=mysql_query("select * from events where id=$s");
		
		while($u=mysql_fetch_array($user))
			{
				
	?><center>
<script>
function idCheck(){

    var id=document.getElementById('id').value;
//alert("sd");
    //alert(id.length);
    if(id.length==""){
	//alert("sd");
        document.getElementById('id_error4').innerHTML=" * Please enter student id";
        return false;
    }
    else if(id.length!=7&&(id.charAt(0)!='B'||id.charAt(0)!='b')){
      //  alert(id.charAt(0));

        document.getElementById('id_error4').innerHTML=" * Student id is invalid";
        return false;
    }
    else{
       // alert(id);
        //alert(id.charAt(0));
        //alert(id.charAt(0));
        var i;
        for(i=1;i<id.length;i++){
                if(isNaN(id.charAt(i))){
                    alert(id.charAt(i));
                    document.getElementById('id_error4').innerHTML=" *Student id is invalid";
                    return false;
                }
        }
        document.getElementById('id_error4').innerHTML="";
        return true;
    }
}
function checkValidation(){
    if(idCheck()) {
        document.getElementById('submit_error2').innerHTML="";
        document.getElementById("signup").submit();
    }
    else{
       // alert(checkPassId());
        document.getElementById('submit_error2').innerHTML=" * Please check your details";

    }
}
</script>
<br><br>
		<div class="w3-card-4 " style="width:50%;">
     <div class="w3-container">
	<br><br>
	<form class="form-horizontal" action=" " method="post" name="signup">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">EventName:</label>
	
      <div class="col-sm-10">
	<b><?php echo $u[4];?></b>
        <input type="hidden" class="form-control" id="ename"  name="ename" placeholder="Enter email"  value="<?php echo $u[4];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">FullName:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="name" name="name" placeholder="name" required="true" >
      </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Uni. Id:</label>
      <div class="col-sm-10">          
          <input type="text"  type="email" class="form-control" id="id" placeholder="Enter university id" name="usrname" onblur="idCheck()">
	<span id="id_error4" style="color:red"></span><br>
      </div>
 </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> accpet T&C</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	<?php 
	if(isset($_SESSION['user']))
        echo '<button type="button" class=" btn btn-xm btn-success" value="submit" onClick="checkValidation()">Submit</button>&nbsp;&nbsp;
	 <span id="submit_error2" style="color:red"></span>';
	else
	 echo '<button type="submit" class="btn btn-default" name="register" disabled="disabled">Submit</button>';
	?>
      </div>
    </div>
  </form>

	</div>
    </div>
		<?php }
		
?>
        <br><br><br><br><br><br>
	<?php include('footer.php');?>
    </body>
</html>
