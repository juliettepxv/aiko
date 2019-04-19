<?php
/**
 * Un titre H2
 * @var Classiq\Models\JsonModels\ListItem $vv
 *
 */

$styleCss=$vv->getData("style","encart");

?>
<div <?=$vv->wysiwyg()->attr()?> class="block block-titre">
    <div class="container  <?= $styleCss?>">

        <?=pov()->svg->use("startup-tiret-h")?>

        <?=$vv->wysiwyg()
            ->field("texte_lang")
            ->string(\Pov\Utils\StringUtils::FORMAT_NO_HTML_SINGLE_LINE)
            ->setPlaceholder("Saisissez votre titre")
            ->htmlTag("h2")
            ->addClass("tt-titre")
        ?>

        <?=pov()->svg->use("startup-tiret-h")?>

    </div>
</div>


