<?php
$view->inside("layout/layout", $vv);
?>

<div class="container pt-big" style="min-height: 100vh;">
    <h1>YO</h1>
    <div class="sprites">
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
        <div class="sprite-a animate"></div>
    </div>

</div>
<script>
    :/*
    setTimeout(function(){
        let i;
        let clones=[];
        let $container=$(".sprites")
        for(i = 0; i < 5;i++){
            clones.push($(".sprite-a").clone());
        }
        for(i = 0; i < clones.length;i++){
            let $clone=clones[i];

            setTimeout(function(){
                $container.append($clone);
                $clone.addClass("animate");
            },100*i);
        }

        let interval=setInterval(function(){
           let $clone= $(".sprite-a").clone();

        });

    },1000*4)
    */
</script>
