<?php if(!defined("__XE__"))exit;?>		function getGeoIP_cdnservice() {
			$.each(oFlag, function(ip, arrID) {
				$.getJSON('https://geoip.cdnservice.eu/api/'+ip+'/en?callback=?', function(location) {
					$.each(arrID, function(i, id) {
						$('#'+id).addClass(location.country.code);
						$('#'+id).attr('title', location.country.name + (location.city != false ? ' (' + location.city + ')' : ''));
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
