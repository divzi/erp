<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<link rel="stylesheet" type="text/css" href="login.css" />
<div class="container">
	<section id="content">
		<form action='registerme.php' method='get'>
			<h1>Registration Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username" />
			</div>
                        <br>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
                        <br>
                        <div>
				<input type="password" placeholder="Confirm Password" required="" name="password" />
			</div>
                        <br>
                        <div> <select type="select" placeholder="select" name="designation">
  <option type="option" value="null">Select Designation</option>
  <option type="option" value="hr">HR</option>
  <option type="option" value="ceo">CEO</option>
  <option type="option" value="emp">EMP</option>
</select>
                        </div>
                        
			<div>
				<input type=submit value="Register" name="REGISTER" />
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->