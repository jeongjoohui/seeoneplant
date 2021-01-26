// <![CDATA[
jQuery(function($) {

    $(".tab:first-of-type, .tabpanel:first-of-type").addClass("active").attr("tabIndex", 0);
    $(".tab:first-of-type").attr("aria-selected", true);
    $(".tabpanel:first-of-type").attr("aria-hidden", false);

    
    $(".tab").on("click", function(){
        $(this).addClass("active").attr({"aria-selected": true, tabIndex: 0}).siblings().removeClass("active").attr({tabIndex: -1});
        $("#" + $(this).attr("aria-controls")).addClass("active").attr({tabIndex: 0}).siblings
        (".tabpanel").removeClass("active").attr({tabIndex: -1});
    });

});
// ]]>
