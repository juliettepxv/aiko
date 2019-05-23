<?php
/** @var Page $vv */
use Classiq\Models\Page;

?>

<div class="wrap-rub">
    <?=$view->render("components/rub",$vv)?>
    <div class="pt-medium ">
    <?= $vv->wysiwyg()
        ->field("name_lang")
        ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
        ->setPlaceholder("Titre long")
        //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
        ->htmlTag("h3")
        ->addClass("title")
    ?>

    </div>

</div>
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
<? elseif (cq()->wysiwyg()): ?>
    <div id="cq-style">
        <div text-center class="cq-box cq-th-danger">
            Il faut choisir une image
        </div>
    </div>
<? endif ?>



<div class="wrap-text">
    <?= $vv->wysiwyg()
        ->field("vars.texte_lang")
        ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
        ->setPlaceholder("Texte d'intro")
        //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
        ->htmlTag("div")
        ->addClass("txt")
    ?>
</div>