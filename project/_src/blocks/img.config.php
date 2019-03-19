<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
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
    ->select([
            "Une image"=>"one-image",
            "Deux images"=>"two-images",
    ])
?>

<label>Zone de texte?</label>
<?=$vv->wysiwyg()
    ->field("texte")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Activer")
?>
<?if($vv->getData("texte")):?>
    <?=$vv->wysiwyg()
        ->field("invert")
        ->bool()
        ->onSavedRefreshListItem($vv)
        ->checkbox("inverser la mise en page")
    ?>
<?endif;?>


