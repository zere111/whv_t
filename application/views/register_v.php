<!-- /detail -->
<link rel="stylesheet" type="text/css" href='<?php echo base_url("/static/css/register.css"); ?>' />

	<div class="zw-containor">
		<h1 class="zw-title">User Register</h1>
		<form action='<?php echo base_url("/index.php/register/adduser"); ?>' method="post">
			<ul  class="login-form" style="list-style:none">
				<li class="login-info">UserName:&nbsp
					<input  autofocus="ture" class="login-input" name="uname" type="text" />
				</li>				
				<li class="login-info">PassWord:&nbsp&nbsp
					<input class="login-input" id="upass" name="upass" type="password" />
				</li>				
				<li class="login-info"  id=pwagain>Type Again:
					<input class="login-input" id="upass1" name="upass1" type="password" />
					<a id="check_ma"></a>
				</li>
				<li class="login-info">Nick Name:
					<input class="login-input" name="unina" type="text" />
				</li><li class="login-info">Email Add:&nbsp
					<input class="login-input" name="uemail" type="text" />
				</li>	
				<li>
					<input class="login-submit" id="submit" name="submit" type="submit" value="Submit"/>
				</li>
			</ul>
			
		</form>
						
	</div>
<script src='<?php echo base_url("/static/js/register.js"); ?>'></script>