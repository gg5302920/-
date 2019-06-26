<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="//cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" />
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="//zb.lao4g.net/css/live.css" />
		<script type="text/javascript" src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="//cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
		<script type="text/javascript" src="//zb.lao4g.net/js/live.js"></script>
		<title>直播聚合</title>
	</head>
	<body>
		<header class="am-topbar am-topbar-inverse">
			<h1 class="am-topbar-brand">直播聚合(需下载vlc播放器)</h1>
		</header>
<div class="am-container">
			<ul class="am-avg-lg-4 am-avg-md-3 am-avg-sm-2 am-thumbnails">
	<?php
$handle = fopen("http://api.maiyoux.com:81/mf/json.txt","rb");
$content = "";
while (!feof($handle)) {
    $content .= fread($handle, 10000);
};
$content = json_decode($content);
foreach ($content->pingtai as $key) {
  
    echo '<li class="live-item"><a target="_blank" href="zblist.php?url='.$key->address.'"><div class="live-img"><img class="pic" src="'.$key->xinimg.'"/><div class="cover cover-lay"><div class="cover cover-icon"></div></div><p>'.$key->title.'</p></li>';
};
?>
</ul>
</div>
</body>
</html>