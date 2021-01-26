<?php if(!defined("__XE__"))exit;?>		function getGeoIP_nekudo() {
			function callAjax_nekudo() {
				ip = Object.keys(oFlag)[0];
				arrID = oFlag[ip];
				delete oFlag[ip];
				
				$.getJSON('https://geoip.nekudo.com/api/'+ip+'/en?callback=?', function(location) {
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
					if(++done < total) setTimeout(callAjax_nekudo, 200);
					else spinner.stop(); 
				});
			}
			callAjax_nekudo();
		}
