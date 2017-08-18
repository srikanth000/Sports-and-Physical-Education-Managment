 
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

<?php include('login.php');

?>
<?php include('header.php');

?>
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

<br>
<style type="text/css">
.select-boxes{width: 280px;text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #FB4314;
    color: #55BB91;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
.choice{

margin-top:20px;
margin-left:520px;

}
p{
margin-left:550px;
font-size:30px;
}
.area{
margin-top:20px;
margin-left:320px;

}
</style>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxDataSe.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select </option>');
            $('#city').html('<option value="">Select state first</option>'); 
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
<center> <h3> <b> E-complaints</b></h3></center>

<?php
                
           
  mysql_connect("localhost","root","") or die ("connection");
   mysql_select_db("se") or die ("DAtabse");      
if(isset($_POST['textarea_name']))
  {
   $text = $_POST['textarea_name'];
$u=$_SESSION['user'];
  mysql_query("INSERT INTO cp VALUES ('?','$u','$text')"); //create database "se" and table cp with 2 attributes 1 is id with auto increment 
  echo "<center color='blue'><h4 color=\"blue\">Your Request Submitted Successfully..</h4></center>";

	}
?>
    <div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfigSe.php');
    
    //Get all country data
    $query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
              
    <div class="choice">
    <select name="country" id="country">
        <option value="">Select Sports</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value=""></option>';
        }
        ?>
    </select>
    
    <select name="state" id="state">
        <option value="">Select Sport Item</option>
    </select>
    </div>
    </div>
    <div class=area>
    <form method="post" action="e-complaint.php">
    <textarea name="textarea_name" cols="70" rows="10" >
          </textarea>
    <input type=submit value=submit></input>
    </div>
    </form>  
    
</body>
</html>
