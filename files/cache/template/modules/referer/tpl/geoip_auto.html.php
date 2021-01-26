<?php if(!defined("__XE__"))exit;?>		var timer = null;
		var xhr = new Array();
		var total_servers = 8;
		xhr[0] = $.getJSON('http://ip-api.com/json/8.8.8.8?callback=?', function(location) {
			if (location.countryCode != "" && $("#GeoIPSite").val() != "auto") {
				$("#GeoIPSite").val("ipapi");
				for (var i=0; i<total_servers; i++) {
					if(i!=0 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_ipapi();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "ipapi Request Failed: " + textStatus + ", " + error );
		});
		xhr[1] = $.getJSON('http://api.petabyet.com/geoip/8.8.8.8', function(location) {
			if (location.country_code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("petabyet");
				for (var i=0; i<total_servers; i++) {
					if(i!=1 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_petabyet();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "petabyet Request Failed: " + textStatus + ", " + error );
		});
		xhr[2] = $.getJSON('https://geoip.nekudo.com/api/8.8.8.8', function(location) {
			if (location.country.code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("nekudo");
				for (var i=0; i<total_servers; i++) {
					if(i!=2 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_nekudo();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "nekudo Request Failed: " + textStatus + ", " + error );
		});
		xhr[3] = $.getJSON('https://geoip.cdnservice.eu/api/8.8.8.8', function(location) {
			if (location.country.code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("cdnservice");
				for (var i=0; i<total_servers; i++) {
					if(i!=3 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_cdnservice();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "cdnservice Request Failed: " + textStatus + ", " + error );
		});
		xhr[4] = $.getJSON('https://get.geojs.io/v1/ip/geo/8.8.8.8.js?callback=?', function(location) {
			if (location.country_code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("geojs");
				for (var i=0; i<total_servers; i++) {
					if(i!=4 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_geojs();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "geojs Request Failed: " + textStatus + ", " + error );
		});
		xhr[5] = $.ajax({
			url: "https://geoip-db.com/jsonp/8.8.8.8",
			jsonpCallback: "callback",
			dataType: "jsonp",
			success: function( location ) {
				if (location.country_code != "" && $("#GeoIPSite").val() == "auto") {
					$("#GeoIPSite").val("geoipdb");
					for (var i=0; i<total_servers; i++) {
						if(i!=5 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
					}
					if (timer) { clearTimeout(timer); timer = null; }
					getGeoIP_geoipdb();
				}
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "geoipdb Request Failed: " + textStatus + ", " + error );
		});
		xhr[6] = $.getJSON('https://api.ip.sb/geoip/8.8.8.8?callback=?', function(location) {
			if (location.country_code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("ipsb");
				for (var i=0; i<total_servers; i++) {
					if(i!=6 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_ipsb();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "ipsb Request Failed: " + textStatus + ", " + error );
		});
		xhr[7] = $.getJSON('https://api.ip.sb/geoip/8.8.8.8?callback=?', function(location) {
			if (location.country_code != "" && $("#GeoIPSite").val() == "auto") {
				$("#GeoIPSite").val("ipdata");
				for (var i=0; i<total_servers; i++) {
					if(i!=7 && xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				if (timer) { clearTimeout(timer); timer = null; }
				getGeoIP_ipdata();
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
		    console.log( "ipdata Request Failed: " + textStatus + ", " + error );
		});
		setTimeout(function(){
			timer = setTimeout(function(){
				spinner.stop();
				for (var i=0; i<total_servers; i++) {
					if(xhr[i] != null) { xhr[i].abort(); xhr[i] = null; }
				}
				console.log("### time out");
			}, <?php echo $__Context->refererConfig->timeout ?>);
		}, 500);
