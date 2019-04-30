<?php
/** @var Page $vv */
use Classiq\Models\Page;

?>

<div class="wrap-rub">

    <?= $vv->wysiwyg()
        ->field("name_lang")
        ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
        ->setPlaceholder("Titre")
        //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
        ->htmlTag("h1")
        ->addClass("name")
    ?>
</div>
<div class="wrap-text">
    <?= $vv->wysiwyg()
        ->field("vars.title_lang")
        ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
        ->setPlaceholder("Sous titre")
        //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
        ->htmlTag("h3")
        ->addClass("title")
    ?>

    <?= $vv->wysiwyg()
        ->field("vars.texte_lang")
        ->string(\Pov\Utils\StringUtils::FORMAT_HTML)
        ->setPlaceholder("Texte d'intro")
        //->setMediumButtons(["bold", "italic","select-record","removeFormat"])
        ->htmlTag("div")
        ->addClass("txt")
    ?>
</div>
