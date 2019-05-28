<?php
/** @var Page $vv */
use Classiq\Models\Page;
?>
<svg class="angle-degrade" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1074" height="804"
     viewBox="0 0 1074 804">
    <defs>
        <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
            <stop offset="0" stop-color="<?= site()->getPageColor($vv) ?>" stop-opacity="1"/>
            <stop offset="1" stop-color="#FF0091"  stop-opacity="0"/>
        </linearGradient>
    </defs>
    <path d="M-220,0H854V804H710Z" transform="translate(220)" fill="url(#linear-gradient)"/>
</svg>