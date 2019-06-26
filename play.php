<?php
function getrealurl($url){
	$header = get_headers($url,1);
	if (strpos($header[0],'301') || strpos($header[0],'302')) {
		if(is_array($header['Location'])) {
			return $header['Location'][count($header['Location'])-1];
		}else{
			return $header['Location'];
		}
	}else {
		return $url;
	}
}
 
$url= $_GET['url'];
if(strpos($url,'rtmp') !== false){ 
 $url2 = $url; 
}else{
 $url2 = getrealurl($url); 
}
?>
<html>
<body style="background:url(https://image.baidu.com/search/down?tn=download&word=download&ie=utf8&fr=detail&url=https%3A%2F%2Ftimgsa.baidu.com%2Ftimg%3Fimage%26quality%3D80%26size%3Db9999_10000%26sec%3D1530206125124%26di%3Db7280999344e87722c750fd9cadbad67%26imgtype%3D0%26src%3Dhttp%253A%252F%252Fi1.hdslb.com%252Fbfs%252Farchive%252Feb6f33eaec8ed36c2885788592a3da0cb492a068.jpg&thumburl=https%3A%2F%2Fss0.bdstatic.com%2F70cFuHSh_Q1YnxGkpoWK1HF6hhy%2Fit%2Fu%3D1305331794%2C3945950120%26fm%3D27%26gp%3D0.jpg); background-size:cover;">
<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
 <font color="#FF0000"><?php echo "视频地址:".$url2 ?></font> 
<div id="video" style="width:520px;margin:0 auto;"></div>
<script type="text/javascript">
	var videoObject = {
		container:'#video',
		variable:'player',
		autoplay:true,
		video:'<?php echo $url2 ?>'
	};
	var player=new ckplayer(videoObject);
</script>
</body>
</html>