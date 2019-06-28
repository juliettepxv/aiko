export default class Site{
    constructor() {
        /**
         *
         * @type {Site}
         */
        let me = this;
        me._initListeners();
        //---------------------go------------------------------------------
        me.resizeStage();
        me.onDomChange();
        Site.navActive();

    }

    /**
     *
     * @private
     */
    _initListeners() {

        let me=this;

        require("./layout/NavMenu");
        NavMenu.__init();
        require("./components/data-zoom-img");
        require("./components/data-is-lang");
        //require("./blocks/FormContact");
        //FormContact.initFromDom();

        require("./components/aos");

        //ferme le menu quand on change d'url
        $body.on(EVENTS.HISTORY_CHANGE_URL,function(){
            $body.attr("data-page-transition-state","start");
            //stope en attendant que la transition soit finie
            PovHistory.readyToinject=false;
            NavMenu.close();
           // console.log("a")
        });
        $body.on(EVENTS.HISTORY_CHANGE_URL_LOADED,function(){
            $("#page-transition").attr("theme",PovHistory.currentPageInfo.color);
            console.log("b",PovHistory.currentPageInfo.color)
            //dit qu'on est prêt à afficher la page (s'assure qu'on reste au moins une seconde sur l'écran de transition)
            setTimeout(function(){
                PovHistory.readyToinject=true;
            },1000);

        });
        //changement d'url et HTML injecté
        $body.on(EVENTS.HISTORY_CHANGE_URL_LOADED_INJECTED,function(){
            console.log("c",PovHistory.currentPageInfo.color)

            $("#page-transition").attr("theme",PovHistory.currentPageInfo.color);
            $body.attr("data-page-transition-state","end");
            me.onDomChange();
            //scroll top
            $(window).scrollTop(0);
            Site.navActive();

            if(typeof gtag !== 'undefined' && LayoutVars.googleAnalyticsId){
                //hit google analytics
                gtag('config', LayoutVars.googleAnalyticsId, {'page_path': location.pathname});
            }

        });


        STAGE.on(EVENTS.SCROLL,function(){
           let sc=$(window).scrollTop();
           if(sc==0){
               $body.removeClass("scrolled");
           }else{
               $body.addClass("scrolled");
           }
        });
        $body.on(Pov.events.DOM_CHANGE,function(){
            me.onDomChange();
        });




    }

    /**
     * Selectionne / déselectionne l'item de nav de la page en cours
     */
    static navActive(){
        NavMenu.setActivePage();
        if(PovHistory.currentPageInfo.isHome){
            $body.addClass("is-home");
        }else{
            $body.removeClass("is-home");
        }

    }

    /**
     * Adapte des élements à l'écran
     */
    resizeStage(){
        //ou pas :)
    }

    /**
     * Initialisations d'objets dom
     */
    onDomChange(){
        //ou pas :)
    }
}