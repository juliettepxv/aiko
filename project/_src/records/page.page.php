<?php
/** @var Page $vv */

use Classiq\Models\Page;
the()->htmlLayout()->pageInfo->rubriqueUid = site()->getRubrique($vv,false)->uid();
the()->htmlLayout()->pageInfo->color = site()->getPageColor($vv);
$view->inside("layout/layout", $vv);
?>
<div class="inside pb-big page">
    <style>
        .page {
            --page-color: <?=site()->getPageColor($vv)?>;
        }
    </style>

    <?=$view->render("components/angle-degrade",$vv)?>


    <div class="container page-header">

        <div class="wrap-rub">

            <?= $vv->wysiwyg()
                ->field("name_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder("rub")
                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                ->htmlTag("h1")
                ->addClass("rub")
            ?>
        </div>
        <div class="wrap-text">
            <?= $vv->wysiwyg()
                ->field("vars.title_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder("Saisissez votre texte")
                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                ->htmlTag("h3")
                ->addClass("title")
            ?>

            <?= $vv->wysiwyg()
                ->field("vars.texte_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder("Saisissez votre texte")
                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                ->htmlTag("div")
                ->addClass("txt")
            ?>
        </div>

        <? if (site()->isRubrique($vv)): ?>
            <? if ($vv->thumbnail): ?>
                <div class="block-img py-medium">
                    <div class="img-wrap" data-zoom-img="<?= $vv->thumbnail()->sizeMax(1600, 1600)->jpg()->href() ?>">
                        <?= $vv->thumbnail()
                            ->width(800)
                            ->png()
                            ->htmlTag()
                            ->addClass("img-responsive")
                        ?>
                    </div>
                </div>
            <? elseif (\Classiq\Wysiwyg\Wysiwyg::$enabled): ?>
                <div id="cq-style">
                    <div text-center class="cq-box cq-th-danger">
                        Il faut choisir une image
                    </div>
                </div>
            <? endif ?>
        <?else:?>
            page
        <? endif ?>


    </div>

    <?= $vv->wysiwyg()->field("blocks")
        ->listJson(site()->blocksList)
        ->htmlTag()
        ->addClass("blocks");
    ?>


</div>
