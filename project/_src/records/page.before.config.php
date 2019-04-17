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

            <label>Titre court</label>
            <?foreach (the()->project->languages as $lang):?>
                <?=$vv->wysiwyg()->field("shortname_$lang")
                    ->string()
                    ->input("text",$lang)
                    ->setAttribute("data-lang",$lang)
                ?>
            <?endforeach;?>
        <?else:?>
            <label>Rubrique</label>
            <?=$vv->wysiwyg()->field("vars.rubrique")->recordPicker("page",false)->buttonRecord()->render()?>
        <?endif;?>
    </fieldset>

</div>