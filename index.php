<form action="process.php" method="post">
			<input type="hidden" name="action" value="login" />
			  <div class="form-group">
			    <i class="user icon"></i>
			    <input type="text" name="Username" placeholder="Username or Email" class="inputtext form-control" />
			  </div>
			  <div class="form-group">
			    <i class="pass icon"></i>
			    <input type="password" name="password" placeholder="Password" class="inputtext form-control" />
			  </div>
			  <h6>Keep Me Logged In <span><img src="images/tick-icon.png" /></span></h6>
			  <button type="submit" class="gradient submit_btn btn" id="send_location">
			    <i class="glyphicon glyphicon-log-in"></i> Sign In
			  </button>			  
			  <p style="font-weight:normal;"><a href="#" class="active">Forgot Password</a> | <a href="#">Recover Here</a></p>
			</form>
			<?php 
			require_once('inc/functions.php');
			$obj= new model();
			
			$obj->select();
			?>