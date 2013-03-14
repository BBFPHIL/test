<div id="login_form">
	<h1>PLease Login!</h1>
	
	<?php
	
		//open to function, validate
		echo form_open('login/validate_credentials');
		echo form_input('username', 'Username');
		echo form_password('password', 'Password');
		echo form_submit('submit', 'Login');
		
		//Create a new account
		echo anchor('login/signup', 'Create Account');
		
		
	?>
		
</div>