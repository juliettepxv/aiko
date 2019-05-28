<?php
/** @var Page $vv */

use Classiq\Models\Page;

$view->inside("layout/layout", $vv);

/** @var \Classiq\Models\Nav $menu */
$menu=\Classiq\Models\Nav::getByName("menu",true);
?>



<?=$view->render("components/angle-home",$vv)?>


<div class="intro container">

    <div class="wrap-text">
        <div class="wrap-h1">
            <h1> Créateur de monde virtuel</h1>
        </div>
    </div>

    <div class="tirets">
        <?= pov()->svg->use("startup-tiret-h") ?>
        <?= pov()->svg->use("startup-tiret-h") ?>
    </div>


    <?/*
  <div class="wrap-rub">
      <?=$menu->wysiwyg()->field("items")
          ->listJson(["layout/item"])
          ->horizontal()
          ->contextMenuSize(SIZE_SMALL)
          ->onlyRecords("page")
          ->htmlTag("div")
      ?>
  </div>*/?>

</div>


<?= $vv->wysiwyg()->field("blocks")
    ->listJson(site()->blocksList)
    ->htmlTag()
    ->addClass("blocks");
?>
