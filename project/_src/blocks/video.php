<?php
/** @var Classiq\Models\JsonModels\ListItem $vv */
/** @var \Classiq\Models\Filerecord $file */
$file = $vv->getDataAsRecord("targetUid_lang");
$src="";
if($file){
    $src=$file->httpPath();
}
/** @var bool $posterMode */
$posterMode=$vv->getData("posterMode");


if($posterMode){
    $containerCss="poster";
    $containerRatioCss="";
    $vdoAttr="autoplay='autoplay' muted='muted' loop='loop' ";
}else{
    $containerCss="container";
    $containerRatioCss="embed-responsive embed-responsive-16by9";
    $vdoAttr="controls ";
}


?>
<? if (cq()->wysiwyg() || $src): ?>
<div <?= $vv->wysiwyg()->openConfigOnCreate()->attr() ?> class="block block-video">
<div class="<?=$containerCss?>">
    <? if ($src): ?>
        <div class="<?=$containerRatioCss?>">
            <video <?=$vdoAttr?> src="<?=$src?>"></video>
        </div>
    <? else: ?>
        <div id="cq-style">
            <div class="machin">
                <div text-center class="cq-box cq-th-danger">
                    Il faut choisir une vidéo
                </div>
            </div>
        </div>
    <? endif ?>
</div>
</div>
<? endif ?>