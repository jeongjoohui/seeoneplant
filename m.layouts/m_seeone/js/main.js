// <![CDATA[
jQuery(function($) {
    var controller = new ScrollMagic.Controller();
    /* Layouts
    ------------------------------------------------------- */
    var duration = [300, 500, 700, 1000];
    /* Navi
    ------------------------------------------------------- */
    var $toggle = $('.toggle, .header, .nav, .mwrap, .footer, .quick, .top-btn, .event');
    var $gnb_list = $('.gnb > li');

    //depth1 a prevent
    $('.toggle').on('click', function() {
        $toggle.toggleClass('x');
    });

    $('.mwrap, .footer, .quick').on('click', function() {
        $toggle.removeClass('x');
    });

    $gnb_list.on('click', 'a', function(e) {
        var $this = $(this);
        var $this_list = $(this).parent('li');
    
        console.log($this_list.children().hasClass('depth2'));

            // on
            $gnb_list.stop().removeClass('on');
            $this_list.addClass('on');
        
        if($this_list.children().hasClass('depth2')) {

            e.preventDefault();

            // up
            $this_list.siblings('li').stop().removeClass('up');
            $this_list.stop().toggleClass('up');
            // depth2
            $this.next().stop().slideToggle(duration[1], 'easeInOutQuad');
            $this_list.siblings().animate({ height: 'toggle' }, duration[1], 'easeInOutQuad');
        }
  
    });

    if ($gnb_list.hasClass('on')) {
        var $gnb_on = $('.gnb > .on');

        if($gnb_on.children().hasClass('depth2')) {
            //console.log('aa');
            $gnb_on.children('.depth2').stop().show();
            $gnb_on.addClass('up').siblings('li').hide();
        }
    };
	
	
	/* TOP */
    var html = $('html, body');
    var $top = $('.top-btn');
    
    $top.on('click', function() {
        html.stop(false, false).animate({
            scrollTop: 0
        }, duration[1], 'easeInOutQuint');
    });
	
	/* 터치방향 감지
    ------------------------------------------------------- 
	var startX, startY, endX, endY;
	$('body').on('touchstart', function (event) {
		startX = event.originalEvent.changedTouches[0].screenX;
		startY = event.originalEvent.changedTouches[0].screenY;
	});
	$('body').on('touchend', function (event) {
		endX = event.originalEvent.changedTouches[0].screenX;
		endY = event.originalEvent.changedTouches[0].screenY;
		if (startY - endY > 30) {
			$('#quick').removeClass('nav_up');
		} else if (endY - startY > 30) {
			$('#quick').addClass('nav_up')
			
		}

	});*/
	
	

    /* Slide
    ------------------------------------------------------- */
    
    var mySwiper = new Swiper('.view', {
        speed: 700,
        loop:true,
         autoplay: {
             delay: 5000,
         },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.main-pagi',
			clickable:true
        },
        slideDuplicateActiveClass: 'swiper-slide-active'
    });
    
    var mySwiper2 = new Swiper('.subj-slide', {
		speed: 700,
		slidesPerView: 5,
		spaceBetween: 0,
		breakpoints: {
			// when window width is >= 320px
			320: { slidesPerView: 2.1},
			// when window width is >= 480px
			480: { slidesPerView: 2.25},
			// when window width is >= 640px
            720: { slidesPerView: 4.4},
            // when window width is >= 640px
			1024: { slidesPerView: 5},
		},
		scrollbar: {
			el: '.swiper-scrollbar',
			dragSize:200,
		},
		freeMode:true,
    });
    
	var interiorThumb = new Swiper('.interiorThumb', {
		spaceBetween: 7,
		slidesPerView: 4,
		autoplay: {
			delay: 3000,
		},
		loop: true,
		//freeMode: true,
		loopedSlides: 4,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		slideDuplicateActiveClass: 'swiper-slide-active'
	});
	var interiorView = new Swiper('.interiorView', {

		slidesPerView: 1,
		navigation: {
			nextEl: '.ctrls.next',
			prevEl: '.ctrls.prev',
		},
		autoplay: {
			delay: 3000,
		},
		loop: true,
		loopedSlides: 3,
		slideDuplicateActiveClass: 'swiper-slide-active',
		thumbs: {
			swiper: interiorThumb,
		},
	});
	
	var modalBtn = $('.modal-call'),
		modalCnt = $('.video-modal-bg'),
		modalCls = modalCnt.find('.close-btn');
	
	var embed = $('#player'); //동영상 코드
	

    modalBtn.click(function(){
		$('.video-area').append(embed);
		$('.video-modal-bg').show();
	});
	modalCls.click(function(){
		modalCnt.hide();
		$('.video-area').empty();
	});
    

	//닫기 버튼
	$(document).mouseup(function(e){
		var modal = $('.video-modal-bg');
		if(modal.has(e.target).length===0){
			modalCnt.hide();
			$('.video-area').empty();
		}
			
	});
	
    var colorBox = $('a.colorBox');
    if(colorBox.length){
        $('a.colorBox').colorbox({
            opacity: 0.7,
            rel: 'group1',
            width:'90%'
        });
    }

    var el1 = document.querySelector('.video-counter');
    if(el1){
        od1 = new Odometer({
            el: el1,
            value: 12000,
            format: '(,ddd).dd',
            duration: 2000
        });
    
        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: "#case-count",
            triggerHook: "onStart",
            offset: 0
        })
        .addTo(controller)
        .on("enter leave", function (e) {
            e.type == "enter" ? od1.update(15000) : od1.update(12000);
        })
    }

    // build scene
    var scene = new ScrollMagic.Scene({
        triggerElement: "#firstContent",
        triggerHook: "onStart",
        offset: 150
    })
    .addTo(controller)
    .setClassToggle('body', "nav-up")

});