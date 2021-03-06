<?php
/**
 * @var \Classiq\Models\JsonModels\ListItem $vv
 */
$vv->wysiwyg()->openConfigOnCreate();
/** @var \Classiq\Models\Page $page */
$page=$vv->targetUid(true);

$label=$vv->getData("label_lang",$page->getValue("shortname_".the()->project->langCode));
?>
<?if($page):?>
    <li <?=$vv->wysiwyg()->attr()?>>
        <a  data-href-uid="<?=$page->uid()?>" class="theme-<?=site()->getPageTheme($page)?>" href="<?=$page->href()?>"><?=$label?></a>
    </li>
<?endif?>


