<?php
/**
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
use Classiq\Models\Filerecord;


/** @var Filerecord[] $imgs La liste d'image */
$imgs=$vv->getDataAsRecords("images");

/** @var Filerecord $image1 La première image */
$image1=null;

/** @var Filerecord $image2 La deuxième image */
$image2=null;

/** @var string $style une ou deux images ? */
$style=$vv->getData("style","one-image");
if($style==="two-images" && count($imgs)<2){
    //si il n'y a qu'une seule image...
    $style="one-image";
}

if($imgs){
    $image1=array_shift($imgs);
    if($style==="two-images"){
        $image2=array_shift($imgs);
    }
}



?>
<div <?=$vv->wysiwyg()->openConfigOnCreate()->attr()?> class="block block-img py-medium">
    <div class="container">
        <div class="row cadre <?=$imgs?"multiple":""?>">

            <?if($style==="two-images"):?>

                <div class="col-6 img-wrap" data-zoom-img="<?=$image1->image()->sizeMax(1600,1600)->jpg()->href()?>"  >
                    <?=$image1->image()->sizeCover(600,900)
                        ->jpg()
                        ->htmlTag()
                        ->addClass("img-responsive")?>
                </div>

                <div class="col-6 img-wrap" data-zoom-img="<?=$image2->image()->sizeMax(1600,1600)->jpg()->href()?>"  >
                    <?=$image2->image()->sizeCover(600,900)
                        ->jpg()
                        ->htmlTag()
                        ->addClass("img-responsive")?>
                </div>

            <?else:?>

                <?if($image1):?>
                    <div class="col-12 img-wrap" data-zoom-img="<?=$image1->image()->sizeMax(1600,1600)->jpg()->href()?>"  >
                        <?=$image1->image()->width(1200)
                            ->jpg()
                            ->htmlTag()
                            ->addClass("img-responsive")?>
                    </div>
                <?endif;?>

            <?endif?>


        </div>
    </div>

    <?//balises invisibles pour les autres images de zoom?>
    <div style="display: none;">
        <?foreach ($imgs as $image):?>
            <div data-zoom-img="<?=$image->image()->sizeMax(1600,1600)->jpg()->href()?>"></div>
        <?endforeach;?>
    </div>

</div>

