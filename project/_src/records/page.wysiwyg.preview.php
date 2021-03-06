<?php
/**
 * @var Page $vv
 */

use Classiq\Models\Classiqmodel;
use Classiq\Models\Page;

?>
<div class="preview-record" <?=$view->attrRefresh($vv->uid())?>>
    <?if($vv->id):?>

        <span class="icon image">
            <i style="background-image: url('<?=$vv->thumbnail()->sizeMax(200,200)->bgColor("EEEEEE")->jpg()->href()?>')"></i>
            <?=pov()->svg->use($vv::$icon)?>
        </span>
        <?=$view->render("./tip-errors")?>
        <div>
            <div class="title" title="<?=$vv->name?>"><?=$vv->name?></div>
            <?if(site()->isRubrique($vv)):?>
                <div class="type">
                    c'est une
                    <span style="color:<?=site()->getPageTheme($vv)?>">
                        Rubrique
                    </span>
                </div>
            <?else:?>
                <?if(site()->getRubrique($vv)):?>
                    <div class="type">
                        Dans <span style="color:<?=site()->getPageTheme($vv)?>"><?=site()->getRubrique($vv,true)->name?></span>
                    </div>
                <?endif;?>
            <?endif?>
            <a target="_blank" href="<?=$vv->href()?>" class="type"><?=$vv->modelType()?>@<?=$vv->id?></a>

        </div>



    <?else:?>
        ...
    <?endif?>
</div>