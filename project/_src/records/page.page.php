<?php
/** @var Page $vv */

use Classiq\Models\Page;
the()->htmlLayout()->pageInfo->rubriqueUid = site()->getRubrique($vv,false)->uid();
the()->htmlLayout()->pageInfo->color = site()->getPageColor($vv);
$view->inside("layout/layout", $vv);
?>
<div class="inside page">
    <style>
        .page {
            --page-color: <?=site()->getPageColor($vv)?>;
        }
    </style>

    <?=$view->render("components/angle-degrade",$vv)?>


    <div class="container page-header">

        <?if(site()->isRubrique($vv)):?>
            <?=$view->render("records/header-rubrique",$vv)?>
        <?else:?>
            <?=$view->render("records/header-page",$vv)?>
        <?endif?>

    </div>

    <?= $vv->wysiwyg()->field("blocks")
        ->listJson(site()->blocksList)
        ->htmlTag()
        ->addClass("blocks");
    ?>


</div>
