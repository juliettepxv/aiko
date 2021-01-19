<?php

use Pov\Utils\StringUtils; ?>


<footer id="footer">
    <div class="container py-big">

        <div class="encart-titre mb-medium">
            Emotion design Group
        </div>


        <div class="wrap-contact">
            <?= site()->homePage()->wysiwyg()
                ->field("vars.baseline")
                ->string(StringUtils::FORMAT_HTML)
                ->htmlTag("address") ?>
        </div>


        <?= site()->homePage()->wysiwyg()->field("vars.logos")
            ->listJson("blocks/block-logos/logos/logo-link-item")
            ->horizontal()
            ->contextMenuPosition(POSITION_BOTTOM)
            ->blockPickerEmptyMessage("Insérez des logos dans cette liste")
            ->contextMenuSize(SIZE_SMALL)
            ->onlyImages()
            ->htmlTag("div")
            ->addClass("wrap-logos row")
        ?>
        



            <div class="wrap-contact">
                <?= site()->homePage()->wysiwyg()
                    ->field("vars.contact")
                    ->string(StringUtils::FORMAT_HTML)
                    ->htmlTag("address") ?>
            </div>

            <div class="wrap-legal">
                <?= site()->homePage()->wysiwyg()
                    ->field("vars.legals")
                    ->string(StringUtils::FORMAT_HTML)
                    ->htmlTag("div")
                   ?>
            </div>



    </div>

</footer>

