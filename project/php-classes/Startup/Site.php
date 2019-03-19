<?php

namespace Startup;


use Classiq\Models\Page;
use Pov\System\AbstractSingleton;

/**
 * Cette classe contient des méthodes et des propriétés propre au projet
 * @package Startup
 */
class Site extends AbstractSingleton
{
    /**
     * @var string clé publique à configurer pour les APIs Google ajavascript (google map par exemple)
     */
    public $googleApiKey="";
    /**
     * @var string clé utilisée par google webmater tools pour vérifier que le site vous appartient
     */
    public $googleSiteVerification;
    /**
     * @var string identifiant Gogle analytics
     */
    public $googleAnalyticsId;
    /**
     * @var string[] liste des blocks possibles
     */
    public $blocksList=[
        "blocks/texte",
        "blocks/titre",
        "blocks/img",
        "blocks/img-text",
        "blocks/block-photos/photos",
        "blocks/block-logos/block-logos",
        "blocks/iframe",
        "blocks/video",
        "blocks/dwd"
    ];

    /**
     * Renvoie la home page
     * @return Page|null
     * @throws \Pov\PovException
     */
    public function homePage(){
        return cq()->homePage();
    }

    /**
     * Renvoie la rubrique correspondante à la page donnée
     * @param Page $vv
     * @return Page
     */
    public function getRubrique($vv)
    {
        if($this->isRubrique($vv)){
            return $vv;
        }
        /** @var Page $rub */
        $rub=$vv->getValueAsRecord("vars.rubrique");
        if($rub && $this->isRubrique($rub)){
            return $rub;
        }
        return $this->homePage();
    }

    /**
     * Pour savoir si la page donnée est une rubrique
     * @param Page $vv
     * @return bool
     */
    public function isRubrique($vv){
        return $vv->page_type==="rubrique";
    }

    /**
     * Renvoie la couleur associée à la page
     * @param Page $vv
     * @return string
     */
    public function getPageColor($vv){
        $rub=$this->getRubrique($vv);
        return $rub->getValue("vars.couleur");
    }
}