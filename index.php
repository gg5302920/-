
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>直播聚合</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://live.s1craft.com/static/css/homepage.css?v=201602131645">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://live.s1craft.com/static/js/jquery.lazyload.min.js"></script>
    <script src="http://live.s1craft.com/static/js/homepage.js?v=201602131645"></script>
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?3a019cff454d01908bf7cede7a6eaa04";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  
<script data-fixed="true">
  !function(){
    function params(u, p){
      var m = new RegExp("(?:&|/?)"+p+"=([^&$]+)").exec(u);
      return m ? m[1] : '';
    }
    if(/iphone|ipad|ios|android|ipod/i.test(navigator.userAgent.toLowerCase()) == true && params(location.search, "from") != "mobile"){
      location.href = 'm.php';
    }
  }();
</script>

</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/update.txt">直播聚合(已适配移动端，需下载vlc播放器)更新日志</a>
                <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed">
                    <span class="sr-only">综合视频</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 sidebar">
                                <ul class="nav nav-sidebar">
									<?php
$handle = fopen("http://api.maiyoux.com:81/mf/json.txt","rb");
$content = "";
while (!feof($handle)) {
    $content .= fread($handle, 10000);
};
$content = json_decode($content);
foreach ($content->pingtai as $key) {
    echo '<li><a href="index.php?url='.$key->address.'">'.$key->title.'</a></li>';
};
?>
                </ul>
                                <div class="sidebar-bottom">
                    <img src="http://live.s1craft.com/static/demo.png">
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-2 main">
                <div class="row">
                    
                                        <div class="clearfix"></div>
                </div>
                <div class="row placeholders">
				
				
					<?php
$url2 = isset($_GET["url"]) ? $_GET["url"] : "jsonxingguang.txt";
$url= "http://api.maiyoux.com:81/mf/".$url2;
$handle = fopen($url,"rb");
$content = "";
while (!feof($handle)) {
    $content .= fread($handle, 10000);
};
$content = json_decode($content);
foreach ($content->zhubo as $key) {
    $title1= str_replace(array("%3F","%20","%28","%29","%5E","%7E"),"",$key->title);
    echo '<div class="col-xs-6 col-sm-4 col-md-3 placeholder room-wrapper" data-site="Panda">
                            <a href="play.php?url='.$key->address.'" target="_blank" class="room-box">
                                <div class="imgShow">
                                    <div class="img-wrapper">
                                        <img class="lazy" data-original="'.$key->img.'">
                                    </div>
                                </div>
                                <h5 class="smallTitle">'.$title1.'</h5>
                            </a>
                        </div>';
};
?>
                                            
                                            
                                    </div>
            </div>
        </div>

    </div>

</body>
</html>
