<?php
/** @var Page $vv */

use Classiq\Models\Page;

$view->inside("layout/layout", $vv);

the()->htmlLayout()->pageInfo->isHome=true;

/** @var \Classiq\Models\Nav $menu */
$menu = \Classiq\Models\Nav::getByName("menu", true);
?>

<div class="homepage">

    <?= $view->render("components/angle-home", $vv) ?>

    <div class="intro">

        <div class="logo-animation">

            <div class="block block-video">
                <video autoplay='autoplay' muted='muted' loop='loop'
                       src="<?= the()->fileSystem->filesystemToHttp("project/img/vdo-anim5.mp4"); ?>"></video>
            </div>

        </div>

        <div class="baseline-rub">

            <div class="rub-home">
                <? $i = 0; ?>
                <? foreach ($menu->items() as $item): ?>
                    <? $i += 0.2; ?>
                    <div data-aos="floating" style="transition-delay: <?= $i; ?>s !important;">
                        <?= $view->render("components/rub-home", $item); ?>
                    </div>
                <? endforeach; ?>
            </div>


            <div data-aos="floating" class="baseline container">
                <div class="wrap-text">
                    <div class="text">
                        <h3> Créateur de mondes virtuels</h3>
                    </div>
                </div>

                <div class="tiret">
                    <?= pov()->svg->use("startup-tiret-h") ?>
                </div>
            </div>

        </div>


        <div class="fleche">
            <?= pov()->svg->use("startup-arrow-down") ?>
        </div>

    </div>


    <?= $vv->wysiwyg()->field("blocks")
        ->listJson(site()->blocksList)
        ->htmlTag()
        ->addClass("blocks");
    ?>
