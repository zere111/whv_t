<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>ZeRe's WHV GUIDE</title>
	<base href="<?=base_url()?>"/>
		<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>windows.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
		<link rel="stylesheet" type="text/css" href='css/menu.css' />
	</head>
		
	<body>
		<div id='bg'></div>
		<div class="container">
				<li class="zw-trigger">
					<a class="zw-icon-menu"><span><?php echo $title_name; ?></span></a>
				</li>
				<li class="zw-login">
					<a class="user-login" href='index.php/login#login'>LOGIN</a>
				</li>
					<nav class="zw-nav">
						<a>导航</a>
						<div class="zw-scroller">
								<ul class="zw-submenu">
									<a href='index.php'>首页</a>
								</ul>
								<ul class="zw-submenu">
									<a id="setup" href='index.php/setup#setup'>申请/准备</a>
										<li><a id="files" href='index.php/files#files' class="zw-icon">材料</a></li>
										<li><a id="apply" href='index.php/apply#apply' class="zw-icon">申请</a></li>
										<li><a id="stuff" href='index.php/stuff#stuff' class="zw-icon">行李</a></li> 
								</ul>
								<ul class="zw-submenu">
									<a id="arrive" href='index.php/arrive#arrive'>出发到达</a>
										<li><a id="flight" href='index.php/flight#flight' class="zw-icon">机票</a></li>
										<li><a id="border" href='index.php/border#border' class="zw-icon">出入境</a></li>
										<li><a id="inNZ" href='index.php/inNZ#inNZ' class="zw-icon">达到之后</a></li>
								</ul>
								<ul class="zw-submenu">
									<a id="future" href='index.php/future#future'>未来计划</a>
										<li><a id="study" href='index.php/travel#travel' class="zw-icon">继续旅程</a></li>
										<li><a id="study" href='index.php/study#study' class="zw-icon">留学深造</a></li>
										<li><a id="work" href='index.php/work#work' class="zw-icon">工作</a></li>
								</ul>
								<ul class="zw-submenu">
									<a class="zw.icon" id="exp" href='index.php/exp#exp'>经验交流</a>
								</ul>
								<ul class="zw-submenu">
									<a id="contact" href='index.php/contact#contact'>联系我们</a>
								</ul>
						</div><!-- /zw-scroller -->
					</nav>
				</li>
			
		</div>
	