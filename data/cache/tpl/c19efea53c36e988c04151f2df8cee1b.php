<?php exit;?>001572341524a823c8dafc71c6e03ec49c40e495b07bs:9229:"a:2:{s:8:"template";s:9165:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="am-padding-sm looseRing-filter">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>


    <ul class="am-avg-sm-3 tab-two">
        <?php foreach ($condition as $vo) { ?>

        <?php foreach ($vo["config"] as $v) { ?>
        <li <?php if ($v["value"] == $v["i"]){ ?> class="active" <?php } ?> >
        <a href="<?php echo $v["url"];?>"><?php echo $v["name"];?> <span class="am-icon-caret-down"></span></a>
        </li>
        <?php } ?>

        <?php } ?>

        <li>
            <a href="#doc-oc-demo-filter" data-am-offcanvas>高级筛选</a>

            <!-- 侧边栏内容 -->
            <div id="doc-oc-demo-filter" class="am-offcanvas">
                <div class="am-offcanvas-bar am-offcanvas-bar-flip">
                    <div class="am-offcanvas-content">

                        <p class="filter-header">高级筛选</p>

                        <?php foreach ($condition as $vo) { ?>
                        <article>
                            <span class="category-head"><?php echo $vo["name"];?></span>
                            <ul class="am-avg-sm-3">
                                <li>
                                    <p class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">
                                        <a>全部</a>
                                    </p>
                                </li>


                                <?php foreach ($vo["config"] as $v) { ?>
                                <li>
                                    <p <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                                        <a><?php echo $v["name"];?></a>
                                    </p>
                                </li>

                                <?php } ?>


                            </ul>

                        </article>
                        <?php } ?>


                        <div class="last-line-text">
                            <a href="" class="go" id="looseRingGoLink">GO! 点击前往</a>
                            <a href="/list-luozuan.html" class="clear-filter">清除筛选</a>
                        </div>

                        <div class="close-filter">Close</div>
                    </div>
                </div>
            </div>
        </li>

    </ul>

</section>

<section class="product-ring-interest am-padding-horizontal-sm am-padding-bottom-sm">

    <div class="grey-block transparent">

        <div class="loose-ring-block">
            <?php foreach ($pageList as $vo) { ?>

            <p class="ring-block-line am-text-xs am-padding-xs am-margin-vertical-sm">
                <a href="<?php echo $vo["aurl"];?>">
                    <span class="am-text-truncate"><?php echo $vo["ringShape"]['list'][$vo["ringShape"]['value'][0]] ;?></span>|<span class="am-text-truncate">钻重 <?php echo $vo["weight"];?></span>|
                    <span class="am-text-truncate">颜色 <?php echo $vo["colorNum"];?></span>|<span class="am-text-truncate">净度 <?php echo $vo["clearNum"];?></span>|<span class="red am-text-truncate">会员价 ¥<?php echo $vo["priceNum"];?></span>
                </a>
            </p>
            <?php } ?>

        </div>
        <div class="pagination"><?php echo $page;?></div>


    </div>

</section>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>

<script>
    $(document).ready(function(){


        $filterLink = $("#doc-oc-demo-filter article p");


        $filterLink["click"](function(){
            $(this).addClass("selected");
            $(this).parent().siblings().children().removeClass("selected");

//            console.log($(this).parent().index() + 1);

            $firstNum = (parseInt($("#doc-oc-demo-filter article:nth-child(2) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(2) .selected").parent().index()) ;
            $SecNum = (parseInt($("#doc-oc-demo-filter article:nth-child(3) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(3) .selected").parent().index()) ;
            $ThirdNum = (parseInt($("#doc-oc-demo-filter article:nth-child(4) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(4) .selected").parent().index()) ;
            $FourNum = (parseInt($("#doc-oc-demo-filter article:nth-child(5) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(5) .selected").parent().index()) ;
            $FivNum = (parseInt($("#doc-oc-demo-filter article:nth-child(6) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(6) .selected").parent().index()) ;
            $SixNum = (parseInt($("#doc-oc-demo-filter article:nth-child(7) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(7) .selected").parent().index()) ;
            $SevNum = (parseInt($("#doc-oc-demo-filter article:nth-child(8) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(8) .selected").parent().index()) ;
            $EigNum = (parseInt($("#doc-oc-demo-filter article:nth-child(9) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(9) .selected").parent().index()) ;
            $NinNum = (parseInt($("#doc-oc-demo-filter article:nth-child(10) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(10) .selected").parent().index());


            console.log($firstNum);

            if($(".tab-two li:nth-child(1)").hasClass("active")){
                console.log("/luozuan/select/categoryName-1_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
                $('#looseRingGoLink').attr('href',"/luozuan/select/categoryName-1_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
//                location.href="/luozuan/select/categoryName-1_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html";
            }else if($(".tab-two li:nth-child(2)").hasClass("active")){
                console.log("/luozuan/select/categoryName-2_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
                $('#looseRingGoLink').attr('href',"/luozuan/select/categoryName-2_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
//                location.href="/luozuan/select/categoryName-2_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html";

            }else{
                console.log("/luozuan/select/categoryName-all_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
                $('#looseRingGoLink').attr('href',"/luozuan/select/categoryName-all_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");
//                $('#looseRingGoLink').attr('href',"/luozuan/select/categoryName-all_ringWeight-" + $firstNum + "_priceChoose-" + $SecNum + "_ringShape-" + $ThirdNum + "_cutStyle-" + $FourNum + "_ringColor-" + $FivNum + "_ringLightness-" + $SixNum + "_ringClearance-" + $SevNum + "_ringSymmetry-" + $EigNum + "_ringFluorescence-" + $NinNum + ".html");

            }

        });


    })
</script>";s:12:"compile_time";i:1540805524;}";