 <?php
                
              session_start();
		mysql_connect("localhost","root","");
	        $db=mysql_select_db("se");
		if(isset($_POST['forgot']))
		{
			$user=$_POST['id'];
			$pwd=$_POST['uid'];
			$q1=mysql_query("select * from signup where UID='$user'  and code='$pwd'");
			$q=mysql_fetch_array($q1);
			echo $q1;
			
			if($q1>0)//if($q[3]==$user && $q[5]==$pwd)
			{
				
				//echo $q[0];
				//$_SESSION['user'] =$q[2];	
				echo "sdf";
				echo '<script>
						alert("your password "+'.$q[4].');
						</script>';
				//header('Location:index.php'); 
			}
			else
			{
				echo '<script type="text/javascript"> 
       $(document).ready(function(){
           $(\'#model\').modal(\'show\');
       });
      </script>';
				echo "s";
				//header('Location:index.php'); 
			
			}
		}
		echo "hello";
		
		
?>

