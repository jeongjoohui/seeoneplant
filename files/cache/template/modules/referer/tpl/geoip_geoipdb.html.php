<?php if(!defined("__XE__"))exit;?>		function getGeoIP_geoipdb() {
			function callAjax_geoipdb() {
				ip = Object.keys(oFlag)[0];
				arrID = oFlag[ip];
				delete oFlag[ip];
				
				$.ajax({
					url: "https://geoip-db.com/jsonp/"+ip,
					jsonpCallback: "callback",
					dataType: "jsonp",
					success: function( location ) {
						$.each(arrID, function(i, id) {
							$('#'+id).addClass(location.country_code);
							var a_info = '';
							if(location.city != null) a_info = location.city;
							if(location.state != null) {
								if (a_info != '') a_info += ', ';
								a_info += location.state;
							}
							if (a_info != '') a_info = ' (' + a_info + ')';
							$('#'+id).attr('title', location.country_name + a_info);
							$('#'+id).css('display', 'inline-block');
						});
					}
				})
				.fail(function( jqxhr, textStatus, error ) {
				    console.log( "Request Failed: " + textStatus + ", " + error );
				})
				.always(function() {
					if(++done < total) setTimeout(callAjax_geoipdb, 200);
					else spinner.stop(); 
				});
			}
			callAjax_geoipdb();
		}
