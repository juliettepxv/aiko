<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var Filerecord[] $imgs La liste d'image */
$imgs = $vv->getDataAsRecords("images");

$orientation=[
        "horizontale"=>"horizontal",
        "verticale"=>"vertical"
];

$style=[
    "une image"=>"one-image",
    "deux images"=>"two-images"
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

<label>Orientation</label>
<?=$vv->wysiwyg()
    ->field("orientation")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->select($orientation)
?>

<label>Style</label>
<?=$vv->wysiwyg()
    ->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->select($style)
?>
