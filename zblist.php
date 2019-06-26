<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/live.css" />
		<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
		<script type="text/javascript" src="js/live.js"></script>
		<title>直播聚合</title>
	</head>
	<body>
		<header class="am-topbar am-topbar-inverse">
			<h1 class="am-topbar-brand">直播聚合（需下载vlc播放器）</h1>
		</header>
		<div class="am-container">
			<ul class="am-avg-lg-4 am-avg-md-3 am-avg-sm-2 am-thumbnails">
	<?php
$url= "http://api.hclyz.cn:81/mf/".$_GET["url"];
$handle = fopen($url,"rb");
$content = "";
while (!feof($handle)) {
    $content .= fread($handle, 10000);
};
$content = json_decode($content);
foreach ($content->zhubo as $key) {
      $title1= str_replace(array("%3F","%20","%28","%29","%5E","%7E"),"",$key->title);
        echo '<li class="live-item"><a target="_blank" href="vlc://'.$key->address.'"><div class="live-img"><img class="pic" src="'.$key->img.'"/><div class="cover cover-lay"><div class="cover cover-icon"></div></div><p>'.$title1.'</p></li>';
};
?>
</ul>
</div>
</body>
</html>