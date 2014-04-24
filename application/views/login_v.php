<!-- /detail -->
<link rel="stylesheet" type="text/css" href='<?php echo base_url("/static/css/login.css"); ?>' />
	<div class="zw-containor">
		<h1 class="zw-title">User Login</h1>
		<form action='<?php echo base_url("/index.php/login/check_login"); ?>' method="post">
			<ul  class="login-form" style="list-style:none">
				<li class="login-info">UserName: 
					<input  autofocus="ture" class="login-input" name="uname" type="text" />
				</li>				
				<li class="login-info">PassWord:&nbsp
					<input class="login-input" name="upass" type="password" />
				</li>				
				<li>
					<input class="login-submit" name="submit" type="submit" value="login"/>
				</li>
			</ul>
			
		</form>
			
		<h4 class="zw-title">Havn't Got An Account?</h4>
		<h1 class="zw-title"><a href='<?php echo base_url("/index.php/register"); ?>'>>>Register Now</a></h2>
				
	</div>