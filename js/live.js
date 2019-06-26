var site_path = window.location.href;
var arr = site_path.split("/");  
delete arr[arr.length-1];  
var path = arr.join("/");  
//Ajax返回搜索结果
	$(function(){
		$('.kwd').keyup(function(){
			var kwd=$('.kwd').val();
			$.ajax({
				type:"post",
				url:path+"/index.php?a=Search",
				data:{kwd:kwd},
				dataType:'json',
				success:function(result){
					var oUl = $('.res-ul').html('');
					for (var i = 0; i < 5; i++) {
						try{
							$('.res-ul').append('<li class="list-group-item"><img class="img-circle userpic" src='+result[i]['userpic']+'><a href='+result[i]["url"]+' '+'target="_blank">'+result[i]["name"]+':'+result[i]["title"]+'</a></li>');
						}catch(e){
							return;
						}
					}
				}
			});
		$('.kwd').blur(function(){
			$('.res-ul').hide(500);
		})
		$('.kwd').focus(function(){
			$('.res-ul').show(500);
		})
		})
	})
