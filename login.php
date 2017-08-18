 <?php
                
              session_start();
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		if(isset($_POST['login']))
		{
			$user=$_POST['usrname'];
			$pwd=$_POST['psw'];
			$q1=mysql_query("select * from signup where UID='$user'  and password='$pwd'");
			$q=mysql_fetch_array($q1);
			echo $q1;
			
			if($q1>0)//if($q[3]==$user && $q[5]==$pwd)
			{
				
				//echo $q[0];
				$_SESSION['user'] =$q[2];	
				
				header('Location:index.php'); 
			}
			else
			{
				echo '<script type="text/javascript"> 
       $(document).ready(function(){
           $(\'#model\').modal(\'show\');
       });
      </script>';
				echo "Username or password are wrong";
				//eader('Location:index.php'); 
			
			}
		}
		
		
?>

