<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
/** @var \Classiq\Models\Page $page */
$page = $vv->targetUid(true);
$invert=$vv->getData("invert")?"invert":"";
$href="#";
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

}
?>
<?if($page || cq()->wysiwyg()):?>
<a href="<?=$href?>" <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-preview-page <?=$invert?>">

    <div class="container">
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

            <div class="wrap-bg">
                <div class="row">

                    <div class="col-sm-12 col-md-6">

                        <?//image----------------?>
                        <? if ($imgTag): ?>
                            <div class="block-img py-medium">
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

                        <div class="block-texte py-medium">
                            <?= $page->wysiwyg()
                                ->field("name_".the()->project->langCode)
                                ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
                                ->setPlaceholder("Titre de la page...")
                                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                                ->htmlTag("h3")
                                ->addClass("title")
                            ?>

                            <?= $page->wysiwyg()
                                ->field("intro_".the()->project->langCode)
                                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                                ->setPlaceholder("Texte d'introduction....")
                                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                                ->htmlTag("div")
                                ->addClass("txt")
                            ?>

                            <?=pov()->svg->use("startup-arrow-right")?>
                        </div>

                    </div>

                </div>
            </div>
        <?endif?>
    </div>
</a>
<?endif?>





