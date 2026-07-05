(function($) {
	'use strict';

	// current設定
	$(function() {
		$('.gnav_ul a').each(function() {
			var url = $(this).attr('href');

			if (url && location.href.indexOf(url) !== -1) {
				$(this).parent('li').addClass('current');
			} else {
				$(this).parent('li').removeClass('current');
			}
		});
	});

	// スムーススクロール
	$(function() {
		$('a[href^="#"]').on('click', function() {
			var speed = 300;
			var href = $(this).attr('href');
			var target = $(href === '#' || href === '' ? 'html' : href);

			if (!target.length) {
				return;
			}

			$('body,html').animate({ scrollTop: target.offset().top }, speed, 'swing');
			return false;
		});
	});

	// 固定ヘッダー
	$(function() {
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 320) {
				$('.header, .contents').addClass('fixed');
			} else {
				$('.header, .contents').removeClass('fixed');
			}
		});
	});

	// マップ
	$(function() {
		var mapCanvas = document.getElementById('map-canvas');
		var mapTypeId = 'Monochrome';

		if (!mapCanvas || !window.google || !window.google.maps) {
			return;
		}

		var latlng = new google.maps.LatLng(35.163961, 136.878059);
		var mapOptions = {
			mapTypeControl: false,
			zoom: 15,
			center: new google.maps.LatLng(35.166363, 136.881480),
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, mapTypeId]
			},
			mapTypeId: mapTypeId
		};
		var map = new google.maps.Map(mapCanvas, mapOptions);

		new google.maps.Marker({
			position: latlng,
			map: map
		});

		var styledMapOptions = { name: 'かえる調剤薬局' };
		var styleOptions = [{ stylers: [{ saturation: -100 }] }];
		var customMapType = new google.maps.StyledMapType(styleOptions, styledMapOptions);

		map.mapTypes.set(mapTypeId, customMapType);
	});

	// skrollrを初期化
	$(window).on('load', function() {
		if (window.skrollr && typeof window.skrollr.init === 'function') {
			window.skrollr.init();
		}
	});
})(jQuery);