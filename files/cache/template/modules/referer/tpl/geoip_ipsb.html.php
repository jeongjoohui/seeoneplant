<?php if(!defined("__XE__"))exit;?>		function getGeoIP_ipsb() {
			$.each(oFlag, function(ip, arrID) {
				$.getJSON('https://api.ip.sb/geoip/'+ip+'?callback=?', function(location) {
					$.each(arrID, function(i, id) {
						$('#'+id).addClass(location.country_code);
						var a_info = '';
						if(typeof location.city !== 'undefined') a_info = location.city;
						if(typeof location.region !== 'undefined') {
							if (a_info != '') a_info += ', ';
							a_info += location.region;
						}
						if(typeof location.organization !== 'undefined') {
							if (a_info != '') a_info += ', ';
							a_info += 'ISP: ' + location.organization;
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
