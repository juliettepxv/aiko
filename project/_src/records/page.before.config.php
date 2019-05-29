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


            <label>Titre court</label>
            <?foreach (the()->project->languages as $lang):?>
                <?=$vv->wysiwyg()->field("shortname_$lang")
                    ->string()
                    ->input("text",$lang)
                    ->setAttribute("data-lang",$lang)
                ?>
            <?endforeach;?>

            <label>Soustitre</label>
            <?foreach (the()->project->languages as $lang):?>
                <?=$vv->wysiwyg()->field("subtitle_$lang")
                    ->string()
                    ->input("text",$lang)
                    ->setAttribute("data-lang",$lang)
                ?>
            <?endforeach;?>



        <?else:?>
            <label>Rubrique</label>
            <?=$vv->wysiwyg()
                ->field("vars.rubrique")
                ->recordPicker("page",false)
                ->buttonRecord()
                ->render()?>
        <?endif;?>
    </fieldset>

</div>

<?if(site()->isRubrique($vv)):?>
    <h4>Paramètres graphiques</h4>
    <div class="cq-box">
        <fieldset>
            <label>Thème</label>
            <?=$vv->wysiwyg()
                ->field("vars.theme")
                ->string()
                ->onSavedRefreshRecord($vv)
                ->select(["orange","blue","green","pink"])?>
        </fieldset>
    </div>
<?endif?>