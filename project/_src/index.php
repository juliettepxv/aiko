<?php
/** @var Page $vv */
use Classiq\Models\Page;
$view->inside("layout/layout", $vv);
?>

<?= $vv->wysiwyg()->field("blocks")
    ->listJson(site()->blocksList)
    ->htmlTag()
    ->addClass("blocks");
?>
