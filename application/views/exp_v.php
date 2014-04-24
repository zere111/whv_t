<link rel="stylesheet" type="text/css" href='<?php echo base_url("/static/css/exp.css"); ?>' />
<div id="addpost">
	<div class="zw-containor">
		<h1 class="zw-title">New Post</h1>
		<form action='<?php echo base_url("/index.php/exp/post_add"); ?>' method="post">
			<ul  class="post-form" style="list-style:none">
				<li class="post-info">
					<input value="Please Enter the Title" class="post-title" name="ptitle" type="text" />
				</li>				
				<li class="post-info">Content:
					<textarea class="post-content" name="pcontent"></textarea>
				</li>				
				<li>
					<input class="post-submit" name="submit" type="submit" value="Submit"/>
				</li>
			</ul>
		</form>	
		<div id="addimg">
		 Please add your photos(drag and drop jpg/png/gif less than 5mb each)
		<form action='<?php echo base_url("/index.php/upload/up"); ?>' method="post" enctype="multipart/form-data">
		<input type="file" name="userfile" size="20" />

		<br /><br />

		<input type="submit" value="upload" />

		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div class="show-post">
    </div>
</div>


<div id="change-list">
	<input type="button" id="next" value="next" />
	<input type="button" id="back" value="back" />
</div>
<script src='<?php echo base_url("/static/js/exp.js"); ?>'></script>
<div id="list-box">	