<?php
/** @var Page $vv */

use Classiq\Models\Page;

?>

<div class="wrap-header-page">

    <div class="wrap-rub text-center">
        <h1 class="rub theme">

            <div class="sprites">
                <?= $view->renderIfValid("sprites/rose") ?>
            </div>

            <?= $vv->wysiwyg()
                ->field("name_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder("Titre")
                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                ->htmlTag("span")
            ?>
        </h1>
        <div class="mt-big mb-small">
            <?= $vv->wysiwyg()
                ->field("vars.title_lang")
                ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
                ->setPlaceholder("Sous titre")
                //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
                ->htmlTag("h3")
                ->addClass("title")
            ?>
        </div>

    </div>
    <div class="wrap-text my-big">
        <?= $vv->wysiwyg()
            ->field("vars.texte_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
            ->setPlaceholder("Texte d'intro")
            //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
            ->htmlTag("div")
            ->addClass("txt")
        ?>
    </div>
</div>