<?php
/** @var \Classiq\Models\Page|array $vv */
if(is_a($vv,"\Classiq\Models\Page")){
    //passage de variables à javascript qui nous permettront d'avoir des infos sur la page en cours
    the()->htmlLayout()->pageInfo->uid=$vv->uid();
    the()->htmlLayout()->pageInfo->recordId=$vv->id;
    the()->htmlLayout()->pageInfo->recordType=$vv->modelType();
    the()->htmlLayout()->pageInfo->languagesUrls=[];
    foreach (the()->project->languagesUrls as $langCode=>$root){
        the()->htmlLayout()->pageInfo->languagesUrls[$langCode]=$root."/_.p".$vv->urlpage->id;
    }
    foreach (the()->htmlLayout()->pageInfo->languagesUrls as $langCode=>$url){
        the()->htmlLayout()->hreflangs[$langCode]=$url;
    }
    //seo
    the()->htmlLayout()->meta->title=$vv->urlpage->box()->meta_title_lang;
    the()->htmlLayout()->meta->description=$vv->urlpage->box()->meta_description_lang;
    if($vv->thumbnail){
        the()->htmlLayout()->ogImage=$vv->thumbnail()->sizeCover(500,400)->bgColor("ffffff")->jpg()->href(true);
        the()->htmlLayout()->ogImageWidth=500;
        the()->htmlLayout()->ogImageHeight=400;
    }
}

if(!the()->requestUrl->isAjax){
    the()->htmlLayout()->addJsToFooter("dist/app.js");
    the()->htmlLayout()->addCssToHeader("dist/app.css");
    if(\Classiq\Wysiwyg\Wysiwyg::$enabled){
        the()->htmlLayout()->addJsToFooter("dist/app-wysiwyg.js");
        the()->htmlLayout()->addCssToHeader("dist/app-wysiwyg.css");
    }
    if(site()->googleApiKey){
        the()->htmlLayout()->install()->googleMap(site()->googleApiKey,"places");
    }
    the()->htmlLayout()->layoutVars->googleAnalyticsId=site()->googleAnalyticsId;
    the()->htmlLayout()->hreflang=the()->project->langCode;
    the()->htmlLayout()->favicon->favicon=the()->fileSystem->filesystemToHttp("project/img/favicon.png");
    the()->htmlLayout()->addJavascriptTranslations();

    //manifest
    the()->htmlLayout()->webAppManifest=the()->fileSystem->filesystemToHttp("manifest.json")."?r=".date("Y-m-d-H-i-s");
    the()->htmlLayout()->webAppManifest=\Pov\Defaults\C_default::quickView_url("manifest");
    the()->htmlLayout()->meta->themeColor="#000000";

    $view->inside("layout/html5bp",the()->htmlLayout());
}



//------------------HTML------------------------------------------------



?>
<?if(the()->requestUrl->isAjax):?>
    <?=$view->insideContent?>
<?else:?>
    <div id="root" history-hrefs>

        <main id="main" class="<?=cq()->wysiwyg()?"is-admin":"is-human"?>">
            <div id="main-content" history-receiver>
                <?=$view->insideContent?>
            </div>

            <?=$view->render("layout/footer-social")?>
            <?=$view->render("layout/footer")?>
        </main>


        <?=$view->render("layout/nav")?>


        <!--svg-collection icons-->
        <div style="display: none;">
            <?=pov()->svg->import("dist/svg-collection/startup.svg")?>
        </div>
        <?=cq()->_layoutStuff();?>
        <?if(site()->googleAnalyticsId):?>
            <!-- Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=<?=site()->googleAnalyticsId?>"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '<?=site()->googleAnalyticsId?>');
            </script>
        <?endif?>

        <div class="webpack-time"></div>

        <?//=$view->render("components/test-breakpoints")?>
        <?=$view->render("components/page-transition")?>

    </div>
<?endif?>


