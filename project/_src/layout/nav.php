<?php
/** @var \Classiq\Models\Nav $menu */
$menu=\Classiq\Models\Nav::getByName("menu",true);
?>
<nav id="nav">
    <div id="nav-mask" data-nav-menu-toggle></div>

    <div class="container">
        <div id="nav-bar" >

            <a class="wrap-logo">
                <span class="logo bgimg-contain"
                   style="background-image: url('<?=the()->fileSystem->filesystemToHttp("project/logo.png")?>')"
                   href="<?=cq()->homePage()->href()?>"></span>

            </a>

            <button data-nav-menu-toggle class="burger d-flex d-xl-none unstyled">
                <?=pov()->svg->use("startup-burger")?>
                <?=pov()->svg->use("startup-close")?>
            </button>

        </div>

        <div id="nav-content">

            <?=$menu->wysiwyg()->field("items")
                ->listJson(["layout/item"])
                ->horizontal()
                ->contextMenuSize(SIZE_SMALL)
                ->onlyRecords("page")
                ->htmlTag("ul")
                ->addClass("menu")
            ?>

            <?/*
        <ul class="right">
            <?=$view->render("./menu-languages")?>

        </ul>
    */?>


        </div>
    </div>

</nav>