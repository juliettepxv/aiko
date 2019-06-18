<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var Filerecord[] $imgs La liste d'image */
$imgs = $vv->getDataAsRecords("images");
$options=[
        "horizontale"=>"",
        "verticale"=>"vertical"

];

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

