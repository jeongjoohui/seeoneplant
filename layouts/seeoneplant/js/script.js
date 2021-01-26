var lastScrollTop = 0;
var headerId = document.getElementById('header');
var footerId = document.getElementById('footer');
var mainId = document.getElementById('main-visual');
var el1 = document.querySelector('.top-counter');
var el2 = document.querySelector('.video-counter');
var videoBg = document.querySelector('.video-bg');

var controller = new ScrollMagic.Controller();

var caseCount = el1.getAttribute('data-case');


if(el1){
    od1 = new Odometer({
        el: el1,
        value: 12000,
        format: '(,ddd).dd',
        duration: 2000
    });
    od1.update(caseCount);
}

if(el2){
    od2 = new Odometer({
        el: el2,
        value: 12000,
        format: '(,ddd).dd',
        duration: 2000
    });
}

//흐르는 배너 simplyscroll 플러그인 사용
var scroller = $('#scroller');
if(scroller.length){
    $('#scroller').simplyScroll();
}

window.addEventListener("scroll", function () {
	var st = window.pageYOffset || document.documentElement.scrollTop;

	// if (st > lastScrollTop) {
	// 	headerId.classList.add('header-hide');
	// } else {
	// 	headerId.classList.remove('header-hide');
    // }
    
    if (st > 0) {
        headerId.classList.add('nav-up');
    } else {
        headerId.classList.remove('nav-up');
    }

	//lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

/* TOP */
var html = $('html, body');
var $top = $('.top-btn');

$top.on('click', function() {html.stop().animate({scrollTop: 0});});


if (mainId) {
    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: "#case",
            triggerHook: "onStart",
            offset: 150
        })
        .addTo(controller)
        .on("enter leave", function (e) {
            e.type == "enter" ? od2.update(caseCount) : od2.update(12000);
        })

    // build scene
    var scene = new ScrollMagic.Scene({
            triggerElement: "#subject",
            triggerHook: "onStart",
            offset: 150
        })
        .addTo(controller)
        .setClassToggle(videoBg, "blur")


    var txtline = document.querySelectorAll(".txtline");
    var waypoint = document.querySelectorAll(".waypoint");


    // create scene for every title
    for (var i = 0; i < txtline.length; i++) {
        new ScrollMagic.Scene({
                triggerElement: txtline[i],
                triggerHook: "onStart",
                offset: '-100%'
            })
            .setClassToggle(txtline[i], "on")
            .addTo(controller);
    }

    // create scene for every title
    for (var i = 0; i < waypoint.length; i++) {
        new ScrollMagic.Scene({
                triggerElement: waypoint[i],
                triggerHook: "onStart",
                offset: '-150%',
            })
            .setClassToggle(waypoint[i], "on")
            //.addIndicators()
            .addTo(controller);
    }
}



function modalcall(item){
    var tg = item.href;
    console.log();
}
var modalCallBtn = $(".modal-call-btn");
var modalContainer = $(".modal-container");
var modalClose = $(".modal-close");

modalCallBtn.click(function(){
    var item = $(this).attr('href');
    $(item).show().siblings().hide();
    modalContainer.show();
});
modalClose.click(function(){
    modalContainer.hide();
});
$(document).on('click',function(e){
    if(modalContainer.is(e.target)){
        modalContainer.hide();
    }
});


var topBnr = new Swiper('.top-bnr__right', {
    speed: 400,
    autoplay: {
        delay: 5000,
    },
    loop: true,
    navigation: {
        nextEl: '.ctrls.next',
        prevEl: '.ctrls.prev',
    }
});

var mySwiper1 = new Swiper('.main-slider', {
    speed: 500,
    autoplay: {
        delay: 4000,
    },
    loop: true,
    navigation: {
        nextEl: '.ctrls1.next',
        prevEl: '.ctrls1.prev',
    },
    slideDuplicateActiveClass: 'swiper-slide-active'
    // pagination: {
    //     el: '.swiper-pagination',
    //     type: 'bullets',
    //     clickable: true,
    // },
});

var interiorThumb = new Swiper('.interiorThumb', {
    spaceBetween: 10,
    slidesPerView: 5,
    autoplay: {
        delay: 3000,
    },
    loop: true,
    freeMode: true,
    loopedSlides: 5,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    slideDuplicateActiveClass: 'swiper-slide-active'
});
var interiorView = new Swiper('.interiorView', {
    slidesPerView: 1,
    navigation: {
        nextEl: '.ctrls2.next',
        prevEl: '.ctrls2.prev',
    },
    autoplay: {
        delay: 3000,
    },
    loop: true,
    loopedSlides: 5,
    slideDuplicateActiveClass: 'swiper-slide-active',
    thumbs: {
        swiper: interiorThumb,
    },
});