import AOS from 'aos';
import 'aos/dist/aos.css';

setInterval(function () {
    let $slideActive=$("[data-is-scroll-target].aos-animate").first();
    if($slideActive.length){
        let slideName=$slideActive.attr("data-is-scroll-target");
        window.Site.setSlideActive(slideName);
    }
},100);

/*
document.addEventListener('aos:in', ({ detail  }) => {
    console.log('animated in', $(detail ));
    let $el=$(detail);
    if($el.is(".slide")){
        let slideName=$el.attr("data-is-scroll-target");
        window.Site.setSlideActive(slideName);
        console.log("out slide "+slideName);
        console.log("in slide "+slideName);
        $el.addClass("slide-active");
    }

});

document.addEventListener('aos:out', ({ detail  }) => {
    console.log('animated out', detail );
    let $el=$(detail);
    if($el.is(".slide")){
        let slideName=$el.attr("data-is-scroll-target");
        //Site.setSlideActive(slideName);
        console.log("out slide "+slideName);
        $el.removeClass("slide-active");
    }

});
*/

if(!LayoutVars.wysiwyg){
    //$body.addClass("is-aos");
    AOS.init({mirror: true});
}else{
    //$body.addClass("is-not-aos");
    //$body.removeClass("is-aos");
}

