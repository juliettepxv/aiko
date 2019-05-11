var NavMenu={
    $nav:$("#nav"),
    $activator:null,
    open:function(){
        $body.addClass("nav-open");
    },
    close:function(){
        $body.removeClass("nav-open");
    },
    toggle:function(){
        $body.toggleClass("nav-open");
    },
    __init:function () {
        $body.on("click","[data-nav-menu-toggle]",function(){
            NavMenu.toggle()
        });

        //cree le bidule activator
        NavMenu.$activator=$("<div class='activator is-invisible'></div>");
        NavMenu.$nav.find(".menu").append(NavMenu.$activator);

        NavMenu.$nav.find("[data-href-uid]").on("mouseover",function(){
            NavMenu.highlight($(this))
        });
        NavMenu.$nav.find(".menu").on("mouseleave",function(){
            NavMenu.highlight(NavMenu.$nav.find(".menu [data-href-uid].active"))
        });
        NavMenu.setActivePage();
    },
    setActivePage:function(){
        $("[data-href-uid]").removeClass("active");
        $("[data-href-uid='"+PovHistory.currentPageInfo.rubriqueUid+"']").addClass("active");
        NavMenu.highlight($("[data-href-uid='"+PovHistory.currentPageInfo.rubriqueUid+"']"));
    },
    highlight:function($target){
        if(!$target || !$target.length){
            NavMenu.$activator.addClass("is-invisible");
            return;
        }else{
            NavMenu.$activator.removeClass("is-invisible");
        }
        NavMenu.$activator.css("left",$target.position().left)
        NavMenu.$activator.outerWidth($target.outerWidth())
        NavMenu.$activator.outerHeight($target.outerHeight());
        if($target.is(".active")){
            NavMenu.$activator.addClass("is-active");
        }else{
            NavMenu.$activator.removeClass("is-active");
        }
    }
};
window.NavMenu=NavMenu;