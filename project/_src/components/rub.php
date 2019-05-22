<?php
/** @var \Classiq\Models\Page $vv */
?>
<h1 <?=$view->attrRefresh($vv->uid())?> class="rub <?=$vv->getValue("vars.tache")?>" data-aos="floating">


    <div class="sprites">
        <div class="sprite-a animate filter-black2blue"></div>
        <div class="sprite-a animate filter-black2purple"></div>
        <div class="sprite-a animate filter-black2green"></div>
        <div class="sprite-a animate filter-black2orange"></div>
        <?/*
        <div class="sprite-a animate filter-black2blue"></div>
        <div class="sprite-a animate filter-black2orange"></div>
        <div class="sprite-a animate filter-black2yellow"></div>
        */?>
    </div>
    <span>
        <?=$vv->getValue("shortname_".the()->project->langCode)?>
    </span>
</h1>