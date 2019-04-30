<?php
/** @var \Classiq\Models\Page $vv */
?>
<h1 <?=$view->attrRefresh($vv->uid())?> class="rub <?=$vv->getValue("vars.tache")?>">
    <?=$vv->getValue("shortname_".the()->project->langCode)?>
</h1>