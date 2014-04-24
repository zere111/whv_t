<div class="zw-postbox">
	<div class="detail">
		<a>Check Detail</a>
	</div>
	<div class="detail-box">
	<ul class="listpost-info">
		<li class="listpost-time"><?php echo $data->post_date;?></li>
		<li class="listcomm-num">comments:<?php echo $data->comment_count;?></li>
		<li class="listclose-post"><a>X</a></li>
		<li class="listpost-title"><?php echo $data->post_title;?></li>
		<li class="listpost-author"><a><?php echo $nice_name;?></a></li>
	</ul>
	<ul class="listpost-content">
		<article><?php echo $data->post_content;?></article>
	</ul>
	
	<div class="listcomment-box">
		<ul class="listcomment-info">
			<li class="listcomm-author">comment author</li>
			<li class="listcomm-time">comment time</li>
		</ul>
		<ul class="listcomment-content">
			<p>this is the content of the comment</p>
		</ul>
	</div>	
	</div>
</div>
