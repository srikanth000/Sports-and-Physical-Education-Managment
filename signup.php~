<?php
                
              session_start();
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		
		
			$lname=$_POST['fn'];
			$fname=$_POST['ln'];
			$email=$_POST['email'];
			$pwd=$_POST['psw'];
			$code=$_POST['code'];
			$uid=$_POST['UID'];
			$cpwd=$_POST['cpsw'];
			
			$q1=mysql_query("insert into signup(firstname,lastname,UID,email,password,confirm,code) values('$lname','$fname','$uid','$email','$pwd','$cpwd','$code')");
			if($q1)
			header('Location:index.php');
			
			
		
		
?>
