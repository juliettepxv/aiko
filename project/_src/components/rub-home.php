<?php

/** @var \Classiq\Models\Page $page */
$page = $vv->targetUid(true);
$label = $vv->getData("label_lang", $page->getValue("shortname_" . the()->project->langCode));
$labelLong = $vv->getData("label_lang", $page->getValue("name_" . the()->project->langCode));

?>

<div class="rub active theme-<?=site()->getPageTheme($page)?>">

    <a data-href-uid="<?= $page->uid() ?>" class="" href="<?= $page->href() ?>">
        <span class="short h1"><?= $label ?></span>
        <span class="long h2"><?= $labelLong ?></span>
    </a>

</div>


