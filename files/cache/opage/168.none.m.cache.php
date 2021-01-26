<?php if(!defined("__XE__"))exit;?><div class="top-title bg_bk tc">
	<h4 class="h6">시원플란트치과</h4>
	<h2 class="h2 medi">오시는길/진료시간</h2>
</div>
<div class="sub-cnt-area bg_bk">
	<div class="cnt-inner inner1" id="location">
		<p class="h6 medi m_20"><span class="marker-icon"><img src="/m.layouts/m_seeone/sub/img/marker-icon.png" alt="위치"></span>&nbsp;&nbsp;오시는길</p>
		<div class="map-wrap p_r">
			<div id="map" class=""></div>
			<address class="address-area p1 tc">
				서울특별시 은평구 통일로 714 우성메디컬 7층 <br>(불광동 281-177 7층)
			</address>
		</div>
		<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=hjp34extyi"></script>
		<script>
			var HOME_PATH = window.HOME_PATH || '.';
			var position = new naver.maps.LatLng(37.609712, 126.930929);
			var map = new naver.maps.Map('map', {
				center: position.destinationPoint(0, 100),
				zoom: 16
			});
			var markerOptions = {
				position: position.destinationPoint(0, 0),
				map: map,
				icon: {
					url: '/m.layouts/m_seeone/img/map-marker.png',
					size: new naver.maps.Size(60, 89),
					origin: new naver.maps.Point(0, 0),
					anchor: new naver.maps.Point(38, 113)
				}
			};
			var marker = new naver.maps.Marker(markerOptions);
			var contentString = [
				'<div class="iw_inner ta_c" style="padding:8px;">',
				'   <h3 class="fz18"><a href="https://store.naver.com/hospitals/detail?id=1875745603" target="_blank">시원플란트치과의원</a></h3>',
				'   <p class="fz16">',
				'       <a href="https://map.naver.com/v5/entry/place/1875745603" style="color:#54c9f4; font-weight:500; margin-right:8px;" target="_blank">큰지도보기</a>',
				'       <a href="https://map.naver.com/v5/directions/-/14129894.998325724,4524435.15167517,%EC%8B%9C%EC%9B%90%ED%94%8C%EB%9E%80%ED%8A%B8%EC%B9%98%EA%B3%BC%EC%9D%98%EC%9B%90,1875745603,PLACE_POI/-/car" style="color:#54c9f4; font-weight:500;" target="_blank">길찾기</a>',
				'   </p>',
				'</div>'
			].join('');
		var infowindow = new naver.maps.InfoWindow({
			content: contentString
		});
		naver.maps.Event.addListener(marker, "click", function(e) {
			if (infowindow.getMap()) {
				infowindow.close();
			} else {
				infowindow.open(map, marker);
			}
		});
		//infowindow.open(map, marker);
		</script>
		
	</div>
	<div class="cnt-inner"><div class="img-wrap"><img src="/m.layouts/m_seeone/sub/img/worktime.jpg" alt=""></div></div>
</div>