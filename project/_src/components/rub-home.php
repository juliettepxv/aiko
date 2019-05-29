<?php

/** @var \Classiq\Models\Page $page */
$page = $vv->targetUid(true);
$label = $vv->getData("label_lang", $page->getValue("shortname_" . the()->project->langCode));
$labelLong = $vv->getData("label_lang", $page->getValue("name_" . the()->project->langCode));

?>

<h1 class="rub active theme-<?=site()->getPageTheme($page)?>">

    <a data-href-uid="<?= $page->uid() ?>" class="" href="<?= $page->href() ?>">
        <span class="short"><?= $label ?></span>
        <span class="long"><?= $labelLong ?></span>
    </a>

</h1>


