<?php if(!defined("__XE__"))exit;?>		function getGeoIP_petabyet() {
			$.each(oFlag, function(ip, arrID) {
				$.getJSON('http://api.petabyet.com/geoip/'+ip+'?callback=?', function(location) {
					$.each(arrID, function(i, id) {
						$('#'+id).addClass(location.country_code);
						var a_info = '';
						if(typeof location.city !== 'undefined') a_info = location.city;
						if(typeof location.region_name !== 'undefined') {
							if (a_info != '') a_info += ', ';
							a_info += location.region_name;
						}
						if(typeof location.isp !== 'undefined') {
							if (a_info != '') a_info += ', ';
							a_info += 'ISP: ' + location.isp;
						}
						if (a_info != '') a_info = ' (' + a_info + ')';
						$('#'+id).attr('title', location.country + a_info);
						$('#'+id).css('display', 'inline-block');
					});
				})
				.fail(function( jqxhr, textStatus, error ) {
				    console.log( "Request Failed: " + textStatus + ", " + error );
				})
				.always(function() {
					if(++done >= total) spinner.stop();
				});
			});
		}
