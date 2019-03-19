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

<label>Activer le zoom?</label>
<?=$vv->wysiwyg()
    ->field("zoom")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Activer le zoom")
?>

