<?php exit;?>00157113720986475a15f290e952b7fd09ee53e0c0a9s:7264:"a:2:{s:8:"template";s:7200:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<div class="am-tabs product-tab" data-am-tabs="{noSwipe: 1}">
    <ul class="am-tabs-nav am-nav am-nav-tabs am-avg-sm-2">
        <li class="am-active"><a href="#tab1">商品</a></li>
        <li><a href="#tab2">详情</a></li>
    </ul>

    <div class="am-tabs-bd">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
            <div data-am-widget="slider" class="am-slider am-slider-a2" data-am-slider='{"directionNav":false}'>
                <ul class="am-slides">
                    <li data-thumb="<?php echo $contentInfo["image"];?>">
                        <img src="<?php echo $contentInfo["image"];?>">
                    </li>
                    <li data-thumb="<?php echo $contentInfo["productImg2"];?>">
                        <img src="<?php echo $contentInfo["productImg2"];?>">
                    </li>
                    <li data-thumb="<?php echo $contentInfo["productImg3"];?>">
                        <img src="<?php echo $contentInfo["productImg3"];?>">
                    </li>
                    <li data-thumb="<?php echo $contentInfo["productImg4"];?>">
                        <img src="<?php echo $contentInfo["productImg4"];?>">
                    </li>
                </ul>
            </div>

            <hr class="grey" />

            <article class="am-padding-horizontal-sm">

                <p class="am-margin-vertical-xs"><b><?php echo $contentInfo["title"];?></b></p>

                <p class="am-margin-vertical-xs grey">¥<?php echo $contentInfo["price"];?></p>

                <ul class="am-avg-sm-2 border-bottom am-text-xs am-padding-bottom-xs">
                    <li class="am-margin-vertical-xs">主钻重量：<?php echo $contentInfo["mainWeight"];?></li>
                    <li class="am-margin-vertical-xs">钻石颜色：<?php echo $contentInfo["ringColor"];?></li>
                    <li class="am-margin-vertical-xs">钻石净度：<?php echo $contentInfo["clarity"];?></li>
                    <li class="am-margin-vertical-xs">钻石切工：<?php echo $contentInfo["cut"];?></li>
                </ul>

                <ul class="am-avg-sm-2 am-text-xs am-padding-vertical-xs">
                    <li class="am-margin-vertical-xs"><span>品名：</span><span><?php echo $contentInfo["tradeName"];?></span></li>
                    <li class="am-margin-vertical-xs"><span>材质：</span><span><?php echo $contentInfo["diamondMaterial"];?></span></li>
                    <li class="am-margin-vertical-xs"><span>颜色：</span><span><?php echo $contentInfo["color"];?></span></li>
                    <li class="am-margin-vertical-xs"><span>手指尺寸：</span><span><?php echo $contentInfo["fingerSize"];?></span></li>
                    <li class="am-margin-vertical-xs"><span>钻石：</span><span><?php echo $contentInfo["diamondType"];?></span></li>
                </ul>

            </article>

        </div>

        <div class="am-tab-panel am-fade" id="tab2">

            <ul class="am-avg-sm-2 border-bottom am-text-xs am-padding-vertical-xs am-padding-horizontal-sm">
                <li><p class="am-margin-vertical-xs"><span>商品分类：</span><span><?php echo $contentInfo["commodity"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>产品编号：</span><span><?php echo $contentInfo["commodityNum"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>系列名称：</span><span><?php echo $contentInfo["seriesName"];?></span></p></li>


                <li><p class="am-margin-vertical-xs"><span>戒托材质：</span><span><?php echo $contentInfo["mainMaterial"];?></span></p></li>

                <li><p class="am-margin-vertical-xs"><span>副石形状：</span><span><?php echo $contentInfo["subshape"];?></span></p></li>

                <li><p class="am-margin-vertical-xs"><span>副石材料：</span><span><?php echo $contentInfo["submaterial"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>颜色：</span><span><?php echo $contentInfo["color"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>主石大小：</span><span><?php echo $contentInfo["mainSize"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>净度：</span><span><?php echo $contentInfo["clarity"];?></span></p></li>
                <li><p class="am-margin-vertical-xs"><span>切工：</span><span><?php echo $contentInfo["cut"];?></span></p></li>

                <li><p class="am-margin-vertical-xs"><span>抛光：</span><span><?php echo $contentInfo["polish"];?></span></p></li>

                <li><p class="am-margin-vertical-xs"><span>对称：</span><span><?php echo $contentInfo["sym"];?></span></p></li>

                <!--<li><p class="am-margin-vertical-xs"><span>荧光：</span><span><?php echo $contentInfo["fluo"];?></span></p></li>-->
            </ul>

            <p class="am-text-center am-margin-vertical-sm active">商品细节展示</p>

            <img src="<?php echo $contentInfo["detailshow"];?>" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

            <p class="am-text-center am-margin-vertical-sm active">商品佩戴效果</p>

            <img src="<?php echo $contentInfo["dressedImage"];?>" class="am-img-responsive am-center am-margin-bottom-sm" alt="<?php echo $contentInfo["title"];?>" />

        </div>
    </div>
</div>

<hr class="grey" />

<section class="product-ring-interest am-padding-top-sm">

    <div class="title-withline"><span>你可能感兴趣的产品</span></div>


    <div class="grey-block am-padding-vertical-sm">
        <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{"animation":"slide","animationLoop":false,"itemWidth":200,"itemMargin":5,minItems: 2,maxItems: 2,directionNav: false}'>
            <ul class="am-slides">

                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>2, "limit"=>"4", "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li>
                    <article class="">
                        <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" width="250" alt="<?php echo $list["title"];?>" />

                        <p class="am-margin-top-xs am-margin-bottom-0 am-text-center am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                        <p class="am-margin-top-0 am-margin-bottom-xs am-text-center grey am-text-sm">¥<?php echo $list["price"];?></p>
                    </article>
                </li>
                <?php } ?>

            </ul>
        </div>


        <a href="/list-jiezhi.html" class="am-center am-margin-top-sm more-products"> 查看更多 >> </a>


    </div>
</section>

<hr class="grey" />

<?php $__Template->display("themes/mobile/three_boxes"); ?>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>";s:12:"compile_time";i:1539601209;}";