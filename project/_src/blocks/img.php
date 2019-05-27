<?php
/**
 * @var Classiq\Models\JsonModels\ListItem $vv
 */

use Classiq\Models\Filerecord;


/** @var Filerecord[] $imgs La liste d'image */
$imgs = $vv->getDataAsRecords("images");

/** @var Filerecord $image1 La première image */
$image1 = null;

/** @var Filerecord $image2 La deuxième image */
$image2 = null;

/** @var string $style une ou deux images ? */
$style = $vv->getData("style", "one-image");

switch ($style) {
    case "one-image":
        $s = "one-image";
        $o = "";
        break;
    case "one-image vertical":
        $s = "one-image";
        $o = "vertical";
        break;
    case "two-images":
        $s = "two-images";
        $o = "";
        break;
    case "two-images vertical":
        $s = "two-images";
        $o = "vertical";
        break;
}


if ($s === "two-images" && count($imgs) < 2) {
    //si il n'y a qu'une seule image...
    $style = "one-image";
}

if ($imgs) {
    $image1 = array_shift($imgs);
    if ($style === "two-images") {
        $image2 = array_shift($imgs);
    }
}

?>

<div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-img py-medium">
    <div class="container">
        <?if(!$image1):?>
        Choisissez au moins une image
        <?else:?>
        <div class="row">
            <div class="col-12 col-lg-12 is-images">
                <div data-aos="floating" class="row cadre <?= $imgs ? "multiple" : "" ?>">
                    <? if ($s == "two-images"): ?>
                        <div class="col-6 img-wrap"
                             data-zoom-img="<?= $image1->image()->sizeMax(1600, 1600)->jpg()->href() ?>">
                            <? if ($o === "vertical"): ?>
                                <?= $image1->image()->sizeCover(600, 800)
                                    ->jpg()
                                    ->htmlTag()
                                    ->addClass("img-responsive") ?>
                            <? else: ?>
                                <?= $image1->image()->sizeCover(600, 600)
                                    ->jpg()
                                    ->htmlTag()
                                    ->addClass("img-responsive") ?>
                            <? endif; ?>
                        </div>
                        <div class="col-6 img-wrap"
                             data-zoom-img="<?= $image2->image()->sizeMax(1600, 1600)->jpg()->href() ?>">
                            <? if ($o === "vertical"): ?>
                                <?= $image2->image()->sizeCover(600, 800)
                                    ->jpg()
                                    ->htmlTag()
                                    ->addClass("img-responsive") ?>
                            <? else: ?>
                                <?= $image2->image()->sizeCover(600, 600)
                                    ->jpg()
                                    ->htmlTag()
                                    ->addClass("img-responsive") ?>
                            <? endif; ?>
                        </div>
                    <? else: ?>
                        <? if ($s === "one-image"): ?>
                            <? if ($o === "vertical"): ?>
                                <div class="col-6 offset-sm-3 img-wrap"
                                     data-zoom-img="<?= $image1->image()->sizeMax(1600, 1600)->jpg()->href() ?>">
                                    <?= $image1->image()->height(800)
                                        ->jpg()
                                        ->htmlTag()
                                        ->addClass("img-responsive") ?>
                                </div>
                            <? else: ?>
                                <div class="col-12  img-wrap"
                                     data-zoom-img="<?= $image1->image()->sizeMax(1600, 1600)->jpg()->href() ?>">
                                    <?= $image1->image()->sizeCover(1200, 600)
                                        ->jpg()
                                        ->htmlTag()
                                        ->addClass("img-responsive") ?>
                                </div>
                            <? endif; ?>
                        <? endif; ?>
                    <? endif ?>
                </div>
            </div>

        </div>
        <?endif?>

    </div>

    <? //balises invisibles pour les autres images de zoom?>
    <div style="display: none;">
        <? foreach ($imgs as $image): ?>
            <div data-zoom-img="<?= $image->image()->sizeMax(1600, 1600)->jpg()->href() ?>"></div>
        <? endforeach; ?>
    </div>

</div>

