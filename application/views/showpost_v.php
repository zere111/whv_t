<ul id="show-info">
		<li id="show-author"><a><?php echo $nice_name;?></a></li>
		<li id="show-time"><?php echo $data->post_date;?></li>
		<li id="show-num"><?php echo $data->comment_count;?></li>
		<li id="show-title"><?php echo $data->post_title;?></li>
		
	</ul>
	<ul id="show-content">
		<p><?php echo $data->post_content;?></p>
	</ul>
	
	<div id="show-comment">
		<ul id="show-comminfo">
			<li id="show-commauthor">comment author</li>
			<li id="show-commtime">comment time</li>
		</ul>
		<ul id="show-commcontent">
			<p>this is the content of the comment</p>
		</ul>
	</div>	
