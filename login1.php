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
	

        <div class="row-fluid" id="demo-1">
            <div class="span6 offset1" style="background-color:balck" >
                <h4>LogIn-Register</h4>
                <div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#panel1" data-toggle="tab" class="active "><i class="icon-lock"></i>&nbsp;<span>Login Panel</span></a></li>
                        <li><a href="#panel2" data-toggle="tab"><i class="icon-user"></i>&nbsp;<span>Register Panel</span></a></li>
                        <li><a href="#panel3" data-toggle="tab"><i class="icon-key"></i>&nbsp;<span>Forgot Password</span></a></li>
                       
                    </ul>
                    <div class="tab-content ">
                        <div class="tab-pane active" id="panel1">
                            <div class="row-fluid">
                                <div class="span10">
                                    <!--<h4><i class="icon-user"></i>&nbsp;&nbsp; Login Here</h4>

                                    <label>Username</label>
                                    <input type="text" class="input-block-level" />
                                    <label>Password<a href="#" class="pull-right"><i class="icon-question-sign"></i>&nbsp;Forgot Password</a> </label>
                                    <input type="password" class="input-block-level" />
                                    <label>
                                        <button type="button" data-toggle="button" class="btn btn-mini custom-checkbox active"><i class="icon-ok"></i></button>
                                        &nbsp;&nbsp;&nbsp;Remember Me
                                    </label>
                                    <br />

                                    <a href="#" class=" btn  ">Sign In&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>!-->
				<form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
                                </div>
				
			
                              
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="panel2">
                            <div class="row-fluid">
                                <div class="span10">
                                    <h4><i class="icon-user"></i>&nbsp;&nbsp; Register Here</h4>


                                    <label>Username</label>
                                    <input type="text" class="input-block-level" />
                                    <label>Password </label>
                                    <input type="password" class="input-block-level" />
                                    <label>Repeat Password</label>
                                    <input type="password" class="input-block-level" />
                                    <label>
                                        <button type="button" data-toggle="button" class="btn btn-mini custom-checkbox active"><i class="icon-ok"></i></button>
                                        &nbsp;&nbsp;&nbsp;I Aggree With <a href="#">Terms &amp; Conditions</a>
                                    </label>
                                    <br />

                                    <a href="#" class=" btn  ">Register Now&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>

                                </div>
                                
                                
                            </div>
                        </div>

                        <div class="tab-pane" id="panel3">
                            <div class="row-fluid">
                                <div class="span10">
                                    <h4><i class="icon-unlock"></i>&nbsp;&nbsp;Password Recovery</h4>

                                    <label>Email</label>
                                    <input type="text" class="input-block-level" />
                                    <label>Security Question</label>
                                    <select class="input-block-level">
                                        <option disabled="disabled" selected="selected">---Select---</option>
                                        <option>Which Is Your First Mobile</option>
                                        <option>What Is Your Pet Name</option>
                                        <option>What Is Your Mother Name</option>
                                        <option>Which Is Your First Game</option>
                                    </select>
                                    <label>Answer</label>
                                    <input type="text" class="input-block-level" />
                                    <br />
                                    <br />
                                    <a href="#" class=" btn  ">Recover Password&nbsp;&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
                                </div>
                                
                            </div>


                        </div>
                        
                        </div>

                    </div>

                </div>
            </div>
        </div>
      

