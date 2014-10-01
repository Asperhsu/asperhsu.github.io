<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asper.tw</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id='nav'>
		<image src='images/AsperLogo500.png'/>
		<ul>
			<li><a href="#about">About</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#photo">Photo</a></li>
			<li><a href="#youtube">Youtube</a></li>
			<li><a href="#github">GitHub</a></li>
		</ul>
	</div>
	<div id='content'>
		<div id="about">
			<div class="text">
				<h1>About</h1>
				<p>我，Asper。綽號是貢丸，體型就跟貢丸一樣得其名。</p>
				<p>喜歡寫寫PHP, Javascript, 騎騎單車、拍拍照</p>
			</div>
			<div class="bg"></div>
		</div>
		
		<div id="blog">
			<div class="text">
				<h2>Blog</h2>
				<p>
					<a href='http://blog.asper.tw/'>AsperBlog!</a> Hosted by Blogspot
				</p>
			</div>
			<div class="bg"></div>	    
		</div>
		
		<div id="photo">
			<div class="text">
				<h2><a href='http://photo.asper.tw/'>Photo</a></h2>
				<p>
					Hosted by Google
				</p>
			</div>
			<div class="bg"></div>	    
		</div>
		
		<div id="youtube">
			<div class="text">
				<h2>Youtube</h2>
				<a href='http://www.youtube.com/aspertw'><img src='images/y2bicon.png' /></a>
			</div>
			<div class="bg"></div>	    
		</div>
		
		<div id="github">
			<div class="text">				
				<h1><a href='https://github.com/Aspertw'>Github</a></h1>
			</div>
			<div class="bg"></div>	    
		</div>
	</div>

	<script type='text/javascript' src='jquery-2.0.3.min.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#nav a").click(function(){
			$(this).attr('href');
			$("html, body").animate({ scrollTop: $($(this).attr('href')).offset().top - 110 }, 500);
			return false;
			
		});
	});
	</script>
</body>
</html>
