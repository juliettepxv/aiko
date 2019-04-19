<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
/** @var \Classiq\Models\Page $page */
$page = $vv->targetUid(true);
$invert=$vv->getData("invert")?"invert":"";
$href="#";
$cssColor="";
$cssIsRub="";
if($page){
    $href=$page->href();
    /** @var \Classiq\Models\Filerecord $img */
    $img=$page->getValueAsRecord("thumbnailAlt");
    if(!$img){
        $img=$page->thumbnail(true);
    }
    if($img){
        $imgTag=$img
            ->image()
            ->width(800)
            ->jpg()
            ->htmlTag()
            ->addClass("img-responsive");
    }
    //couleur
    if(site()->isRubrique($page)){
        $cssColor="--page-color:".site()->getPageColor($page);
    }
    $cssIsRub="is-rub";

}

?>
<?if($page || cq()->wysiwyg()):?>
<a href="<?=$href?>" <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?>
   class="block block-preview-page <?=$invert?> <?if(site()->isRubrique($page)):?>block-preview-rub<?endif;?>"
    style="<?=$cssColor?>">

    <div class="container <?=$cssIsRub?>">
        <?if(!$page):?>

            <div id="cq-style">
                <div text-center class="cq-box cq-th-danger">
                    Il faut choisir une page
                </div>
            </div>

        <?else:?>

            <?
            /**
            * On a une page tout va bien...
            */
            ?>

            <div class="wrap-bg ">

                <?if(site()->isRubrique($page)):?>
                    <div class="wrap-rub">
                        <h1 class="rub">
                            <?=$page->getValue("shortname_".the()->project->langCode)?>
                        </h1>
                    </div>
                <?endif;?>

                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <?//image----------------?>
                        <? if ($imgTag): ?>
                            <div class="block-img ">
                                <div class="img-wrap">
                                    <?=$imgTag?>
                                </div>
                            </div>
                        <? elseif (\Classiq\Wysiwyg\Wysiwyg::$enabled): ?>
                            <div text-center class="cq-box cq-th-danger">
                                Il faut choisir une image
                            </div>
                        <? endif ?>

                    </div>



                    <div class="col-sm-12 col-md-6">

                        <?//textes----------------?>




                        <div class="block-texte">

                            <h3 class="title">
                                <?=$page->getValue("name_".the()->project->langCode)?>
                            </h3>

                            <div class="txt">
                                <?=$page->getValue("vars.texte_".the()->project->langCode)?>
                            </div>

                            <?=pov()->svg->use("startup-arrow-right")->addClass("fleche")?>

                        </div>

                    </div>

                </div>
            </div>
        <?endif?>
    </div>
</a>
<?endif?>





