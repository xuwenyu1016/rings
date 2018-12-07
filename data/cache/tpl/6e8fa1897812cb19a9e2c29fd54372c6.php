<?php exit;?>0015723476750012768f5680563e482c99c905d8beaes:7448:"a:2:{s:8:"template";s:7384:"<?php $__Template->display("themes/default/head"); ?>

<section class="product-ring-block am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?> &gt; <a><?php echo $contentInfo["title"];?></a></p>

        <ul class="am-avg-sm-2 am-margin-top-lg ring-container">
            <li class="am-padding-right-sm">
                <div data-am-widget="slider" class="am-slider am-slider-d3" data-am-slider='{"controlNav":"thumbnails","directionNav":false}' >
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
            </li>
            <li class="am-padding-left-sm">
                <article class="am-padding-left-sm">
                    <h2><?php echo $contentInfo["title"];?></h2>
                    <p class="price am-margin-vertical-xs am-padding-bottom-sm am-text-xl border-bottom">¥<?php echo $contentInfo["priceNum"];?>   <a class="am-text-sm" href="/list-luozuan.html">查看更多裸钻 >></a></p>

                    <ul class="am-avg-sm-2 am-padding-vertical-sm border-bottom am-padding-left-xs">
                        <li class="am-margin-vertical-xs">证书：<?php echo $contentInfo["num"];?></li>
                        <li class="am-margin-vertical-xs">钻重：<?php echo $contentInfo["weight"];?></li>
                        <li class="am-margin-vertical-xs">颜色：<?php echo $contentInfo["colorNum"];?></li>
                        <li class="am-margin-vertical-xs">净度：<?php echo $contentInfo["clearNum"];?></li>

                        <li class="am-margin-vertical-xs"><span class="smWidth">切工：</span><span><?php echo $contentInfo["cutDegree"];?></span></li>
                        <li class="am-margin-vertical-xs"><span class="smWidth">抛光：</span><span><?php echo $contentInfo["polish"];?></span></li>
                        <li class="am-margin-vertical-xs"><span class="smWidth">对称：</span><span><?php echo $contentInfo["sym"];?></span></li>
                        <li class="am-margin-vertical-xs"><span class="smWidth">荧光：</span><span><?php echo $contentInfo["fluo"];?></span></li>
                        <li class="am-margin-vertical-xs"><span class="smWidth">形状：</span><span><?php echo $contentInfo["ringShape"]['list'][$contentInfo["ringShape"]['value'][0]] ;?></span></li>
                        <li class="am-margin-vertical-xs">&nbsp;</li>
                        <li class="am-margin-vertical-xs">&nbsp;</li>
                        <li class="am-margin-botttom-xs am-margin-top-lg">
                            <?php if ( $contentInfo["categoryName"]['list'][$contentInfo["categoryName"]['value'][0]] ==  'GIA'  ){ ?>
                            <img src="/assets/image/122.png" class="am-img-responsive am-fr">
                            <?php }else{ ?>
                            <img src="/assets/image/123.png" class="am-img-responsive am-fr">
                            <?php } ?>
                        </li>
                    </ul>

                    <div class="button-box">
                        <ul class="am-avg-sm-2 am-padding-vertical-sm ">
                            <li><button class="am-margin-vertical-xs" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 600, height: 700}">预约试戴</button></li>
                            <li><a class="am-margin-vertical-xs" href="">在线咨询</a></li>
                        </ul>

                        <!--<a href="" class="purchase">立即购买</a>-->

                        <!--<p class="am-margin-vertical-sm am-padding-top-sm am-padding-left-xs">服务：&emsp;自提/免费提货/免运费/现贷全额支付立即发货</p>-->
                    </div>

                </article>

            </li>
        </ul>
    </div>
</section>

<section class="product-ring-interest">
    <div class="am-container">
        <div class="title-withline"><span>你可能感兴趣的产品</span></div>
    </div>

    <div class="grey-block transparent am-padding-vertical-lg">
        <div class="am-container">
            <div class="loose-ring-block">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>9, "expand_id"=>4, "limit"=>"10", "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <p class="ring-block-line ">
                    <span><?php echo $contentInfo["ringShape"]['list'][$contentInfo["ringShape"]['value'][0]] ;?></span>|<span>证书 <?php echo $list["num"];?></span>|<span>钻重 <?php echo $list["weight"];?></span>|
                    <span>颜色 <?php echo $list["colorNum"];?></span>|<span>净度 <?php echo $list["clearNum"];?></span>|<span>切工 <?php echo $list["cutDegree"];?></span>|<span>抛光 <?php echo $list["polish"];?></span>|
                    <span>对称 <?php echo $list["sym"];?></span>|<span>荧光 <?php echo $list["fluo"];?></span>|<span class="red">会员价 ¥<?php echo $list["priceNum"];?></span><a href="<?php echo $list["aurl"];?>">立即查看</a>
                </p>
                <?php } ?>

            </div>
            <a href="/list-jiezhi.html" class="am-center am-margin-top-xl"> 查看更多 >> </a>
        </div>

    </div>
</section>

<section class="product-ring-interest">
    <div class="am-container am-padding-bottom-sm">
        <div class="title-withline"><span>热门推荐</span></div>
    </div>

    <article class="recommendation-box am-padding-vertical-xl">
        <div class="am-container">
            <ul class="am-avg-sm-2 am-padding-bottom-lg">
                <li class="am-padding-right-sm">
                    <a href="">
                        <img src="/assets/image/115.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
                    </a>
                </li>
                <li class="am-padding-left-sm">
                    <a href="">
                        <img src="/assets/image/116.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
                    </a>
                </li>
            </ul>

            <a href="">
                <img src="/assets/image/117.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
            </a>

        </div>
    </article>

</section>


<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1540811675;}";