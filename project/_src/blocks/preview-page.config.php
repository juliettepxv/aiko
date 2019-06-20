<?php
/**
 *
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */
/** @var \Classiq\Models\Page $page */
$page = $vv->targetUid(true);
?>
<label>Choisir une page</label>
<?= $vv->wysiwyg()->field("targetUid")
    ->recordPicker("page",false)
    ->onSavedRefreshListItem($vv)
->buttonRecord()
->render()
?>


<?if($page):?>

    <label>Image de preview</label>
    <?= $page->wysiwyg()->field("thumbnail")
        ->file()
        ->setMimeAcceptImagesOnly()
        ->onSavedRefreshListItem($vv)
        ->button()
        ->render();
    ?>

    <label>Image de preview alternative</label>
    <?= $page->wysiwyg()->field("thumbnailAlt")
        ->file()
        ->setMimeAcceptImagesOnly()
        ->onSavedRefreshListItem($vv)
        ->button()
        ->render();
    ?>

<hr>

<label>Disposition</label>
<?= $vv->wysiwyg()->field("invert")
    ->bool()
    ->onSavedRefreshListItem($vv)
    ->checkbox("Image à droite")

?>
<?endif?>
