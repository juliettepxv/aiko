<?php

use Pov\Utils\StringUtils; ?>


<footer id="footer">
    <div class="container py-big">

        <div class="encart-titre mb-big">
            Emotion design Group
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


        <div class="row">

            <div class="col-md-12 col-lg-4 wrap-contact">
                <?= site()->homePage()->wysiwyg()
                    ->field("vars.contact")
                    ->string(StringUtils::FORMAT_HTML)
                    ->htmlTag("address") ?>
            </div>


            <? foreach (["footer1", "footer2"] as $name): ?>
                <div class="col-md-6 col-lg-4 wrap-link">
                    <?= site()->homePage()->wysiwyg()
                        ->field("vars.$name")
                        ->listJson(["layout/item"])
                        ->contextMenuSize(SIZE_SMALL)
                        ->onlyRecords("page")
                        ->htmlTag("ul")
                        ->addClass("link") ?>
                </div>
            <? endforeach; ?>
        </div>

    </div>

</footer>

