<?php exit;?>001571308000690ff588f29773884845eb1b8085de49s:8100:"a:2:{s:8:"template";s:8036:"<?php $__Template->display("themes/default/head"); ?>

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
                    <p class="price am-margin-vertical-xs am-padding-bottom-sm am-text-xl border-bottom">¥<?php echo $contentInfo["price"];?>   <a class="am-text-sm" href="/list-jiezhi.html">查看更多钻戒 >></a></p>

                    <ul class="am-avg-sm-2 am-padding-vertical-sm border-bottom am-padding-left-xs">
                        <li class="am-margin-vertical-xs">主钻重量：<?php echo $contentInfo["mainWeight"];?></li>
                        <li class="am-margin-vertical-xs">钻石颜色：<?php echo $contentInfo["ringColor"];?></li>
                        <li class="am-margin-vertical-xs">钻石净度：<?php echo $contentInfo["clarity"];?></li>
                        <li class="am-margin-vertical-xs">钻石切工：<?php echo $contentInfo["cut"];?></li>
                    </ul>

                    <div class="detail-info border-bottom am-padding-vertical-sm am-padding-left-xs">
                        <p class="am-margin-vertical-xs"><span>品名：</span><span><?php echo $contentInfo["tradeName"];?></span></p>
                        <p class="am-margin-vertical-xs"><span>材质：</span><span><?php echo $contentInfo["diamondMaterial"];?></span></p>
                        <p class="am-margin-vertical-xs"><span>颜色：</span><span><?php echo $contentInfo["color"];?></span></p>
                        <p class="am-margin-vertical-xs"><span>手指尺寸：</span><span><?php echo $contentInfo["fingerSize"];?></span></p>
                        <p class="am-margin-vertical-xs"><span>钻石：</span><span><?php echo $contentInfo["diamondType"];?></span></p>
                    </div>

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

    <div class="grey-block am-padding-vertical-xl">
        <div class="am-container">
            <ul class="am-avg-sm-3">
                <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>1, "expand_id"=>2, "limit"=>"3", "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li>
                    <article class="am-padding-lg">
                        <a href="<?php echo $list["aurl"];?>">
                            <img src="<?php echo $list["image"];?>" class="am-img-responsive am-center" width="250" alt="<?php echo $list["title"];?>" />

                            <p class="am-margin-top-xs am-margin-bottom-0 am-text-center am-text-truncate"><?php echo $list["title"];?></p>
                            <p class="am-margin-top-0 am-margin-bottom-xs am-text-center">¥<?php echo $list["price"];?></p>
                        </a>
                    </article>
                </li>
                <?php } ?>
            </ul>

            <a href="/list-jiezhi.html" class="am-center am-margin-top-xl"> 查看更多 >> </a>
        </div>

    </div>
</section>

<section class="product-ring-details am-padding-vertical-xl">
    <div class="am-container">
        <h2 class="am-text-center border-bottom active">产品详情</h2>

        <ul class="am-avg-sm-3 am-margin-vertical-lg">
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

        <h2 class="am-text-center am-padding-bottom-sm active">商品细节展示</h2>

        <img src="<?php echo $contentInfo["detailshow"];?>" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

        <h2 class="am-text-center am-padding-bottom-sm active">商品佩戴效果</h2>

        <img src="<?php echo $contentInfo["dressedImage"];?>" class="am-img-responsive am-center" alt="<?php echo $contentInfo["title"];?>" />

    </div>
</section>


<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1539772000;}";