<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var Filerecord[] $imgs La liste d'image */
$imgs = $vv->getDataAsRecords("images");
$options=[
        "Une image horizontale"=>"one-image",
        "Une image verticale"=>"one-image vertical",
];
if(count($imgs)>1){
    $o=["Deux images carrées"=>"two-images"];
    $options=array_merge($options,$o);

    $o=["Deux images verticales"=>"two-images vertical"];
    $options=array_merge($options,$o);
}
?>
<label>Images</label>
<?=$vv->wysiwyg()->field("images")
        ->recordPicker("filerecord",true)
    ->onSavedRefreshListItem($vv)
        ->onlyFiles()
        ->setMimeAcceptImagesOnly()
        ->buttonRecord()
        ->render()
?>

<label>Style</label>
<?=$vv->wysiwyg()
    ->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->select($options)
?>
<?/*
<label>Orientation?</label>
<?=$vv->wysiwyg()
    ->field("orientation")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Vertical")
?>
<?if($vv->getData("texte")):?>
    <?=$vv->wysiwyg()
        ->field("invert")
        ->bool()
        ->onSavedRefreshListItem($vv)
        ->checkbox("inverser la mise en page")
    ?>
<?endif;?>
*/?>

