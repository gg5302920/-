<?php
function GetBetween($content,$start,$end){
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
 }
return '';
 }
$wangzhi = "https://www1.yaseff.com/";//网站地址  备用 www1.yasegg.com hao2.yasevv.com
$play= 'http://htwo.yyhdyl.com/';//视频地址 共三个 hone  htwo  hthree 都可以试试
$url= $_GET["url"];
$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_ENCODING, ''); 
curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
$data = curl_exec($curl); 
$a = $data;
$b = "]/";
$c = "',";
$houzhui=  GetBetween($a,$b,$c);
$stream = $play.$houzhui;
curl_close($curl);
?>
<html>
<body style="background:url(https://image.baidu.com/search/down?tn=download&word=download&ie=utf8&fr=detail&url=https%3A%2F%2Ftimgsa.baidu.com%2Ftimg%3Fimage%26quality%3D80%26size%3Db9999_10000%26sec%3D1530206125124%26di%3Db7280999344e87722c750fd9cadbad67%26imgtype%3D0%26src%3Dhttp%253A%252F%252Fi1.hdslb.com%252Fbfs%252Farchive%252Feb6f33eaec8ed36c2885788592a3da0cb492a068.jpg&thumburl=https%3A%2F%2Fss0.bdstatic.com%2F70cFuHSh_Q1YnxGkpoWK1HF6hhy%2Fit%2Fu%3D1305331794%2C3945950120%26fm%3D27%26gp%3D0.jpg); background-size:cover;">
<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
 <font color="#FF0000"><?php echo "视频地址:".$stream //调试输出视频地址,可以删掉此行?></font> 
<div id="video" style="width:520px;margin:0 auto;"></div>
<script type="text/javascript">
	var videoObject = {
		container:'#video',
		variable:'player',
		autoplay:true,
		video:'<?php echo $stream ?>'
	};
	var player=new ckplayer(videoObject);
</script>
</body>
</html>