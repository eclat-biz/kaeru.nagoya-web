//current設定
$(function(){
	$('.gnav_ul a').each(function(){
		// リンク先のURLを取得
		var url = $(this).attr('href');
		// 現在表示されているページのURLを取得し，リンク先のURLと照合
		if(location.href.match(url)) {
			// マッチすれば，「class="current"」を付加
			$(this).parent('li').addClass('current');
			// マッチしなければ，「class="current"」を削除
		} else {
			$(this).parent('li').removeClass('current');
		}
	});
});

//スムーススクロール
$(function(){
	$('a[href^=#]').click(function() {
		var speed = 300;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top ;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});

/* 固定ヘッダー */
$(function() {
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 320){
			$('.header, .contents').addClass('fixed');
		} else {
			$('.header, .contents').removeClass('fixed');
		}
	});
});

/* マップ */
$(document).ready(function(){
	var map;
		var MY_MAPTYPE_ID = 'Monochrome';
	function initialize() {
		var latlng = new google.maps.LatLng(35.163961, 136.878059);
		var mapOptions = {
			mapTypeControl: false,
			zoom: 15,
			center: new google.maps.LatLng(35.166363, 136.881480),
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
		});
		var styledMapOptions = {
			name: 'かえる調剤薬局'
		};
		var styleOptions = [
		{
			"stylers": [
				{ "saturation": -100 }
			]
		}
		]
		var customMapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
});
