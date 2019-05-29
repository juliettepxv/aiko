<?php
/** @var \Classiq\Models\Page $vv */
?>
<h1 <?=$view->attrRefresh($vv->uid())?> class="rub <?=$vv->getValue("vars.theme")?>" data-aos="floating" >

    <div class="sprites">
        <?=$view->renderIfValid("sprites/".$vv->getValue("vars.theme"))?>
    </div>
    <span>
        <?=$vv->getValue("shortname_".the()->project->langCode)?>
    </span>
</h1>