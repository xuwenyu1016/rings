<?php exit;?>0015723415264e064bfb56aa32ce368cdd32cc049181s:4426:"a:2:{s:8:"template";s:4362:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="product-tab">
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

        <p class="am-margin-vertical-xs grey">¥<?php echo $contentInfo["priceNum"];?></p>

        <ul class="am-avg-sm-2 border-bottom am-text-xs am-padding-bottom-xs">
            <li class="am-margin-vertical-xs">证书：<?php echo $contentInfo["num"];?></li>
            <li class="am-margin-vertical-xs">钻重：<?php echo $contentInfo["weight"];?></li>
            <li class="am-margin-vertical-xs">颜色：<?php echo $contentInfo["colorNum"];?></li>
            <li class="am-margin-vertical-xs">净度：<?php echo $contentInfo["clearNum"];?></li>
        </ul>

        <ul class="am-avg-sm-2 am-text-xs am-padding-vertical-xs">
            <li class="am-margin-vertical-xs"><span>切工：</span><span><?php echo $contentInfo["cutDegree"];?></span></li>
            <li class="am-margin-vertical-xs"><span>抛光：</span><span><?php echo $contentInfo["polish"];?></span></li>
            <li class="am-margin-vertical-xs"><span>对称：</span><span><?php echo $contentInfo["sym"];?></span></li>
            <li class="am-margin-vertical-xs"><span>荧光：</span><span><?php echo $contentInfo["fluo"];?></span></li>
            <li class="am-margin-vertical-xs"><span>形状：</span><span><?php echo $contentInfo["ringShape"]['list'][$contentInfo["ringShape"]['value'][0]] ;?></span></li>
            <li class="am-margin-vertical-xs">&nbsp;</li>
            <li class="am-margin-vertical-xs">&nbsp;</li>
            <li class="am-margin-botttom-xs am-margin-top-sm">
                <?php if ( $contentInfo['categoryNum'] ==  'GIA'  ){ ?>
                <img src="/assets/image/122.png" class="am-img-responsive am-fr">
                <?php }else{ ?>
                <img src="/assets/image/123.png" class="am-img-responsive am-fr">
                <?php } ?>
            </li>
        </ul>

    </article>

</section>

<hr class="grey" />

<section class="product-ring-interest am-padding-top-sm">

    <div class="title-withline"><span>你可能感兴趣的产品</span></div>

    <div class="grey-block transparent am-padding-horizontal-xs am-padding-vertical-sm">

        <div class="loose-ring-block">
            <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>9, "expand_id"=>4, "limit"=>"10", "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>

            <p class="ring-block-line am-text-xs am-padding-xs am-margin-vertical-sm">
                <a href="<?php echo $list["aurl"];?>">
                    <span><?php echo $contentInfo["ringShape"]['list'][$contentInfo["ringShape"]['value'][0]] ;?></span>|<span>钻重 <?php echo $list["weight"];?></span>|
                    <span>颜色 <?php echo $list["colorNum"];?></span>|<span>净度 <?php echo $list["clearNum"];?></span>|<span class="red">会员价 ¥<?php echo $list["priceNum"];?></span>
                </a>
            </p>
            <?php } ?>

        </div>
        <a href="/list-jiezhi.html" class="am-center more-products"> 查看更多 >> </a>


    </div>

</section>


<hr class="grey" />

<?php $__Template->display("themes/mobile/three_boxes"); ?>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>";s:12:"compile_time";i:1540805526;}";