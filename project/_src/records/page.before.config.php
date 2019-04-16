<?php
/** @var Page $vv */
use Classiq\Models\Page;

?>

<div class="cq-box">
    <fieldset>
        <label>Type de page</label>
        <?=$vv->wysiwyg()->field("page_type")->string()->select(["rubrique","page"])?>
    </fieldset>
    <fieldset>
        <?if(site()->isRubrique($vv)):?>
            <label>Couleur</label>
            <?=$vv->wysiwyg()->field("vars.couleur")->string()->input("color")?>
            <?=$vv->wysiwyg()->field("vars.couleur")->string()->input()?>
        <?else:?>
            <label>Rubrique</label>
            <?=$vv->wysiwyg()->field("vars.rubrique")->recordPicker("page",false)->buttonRecord()->render()?>
        <?endif;?>
    </fieldset>

</div>