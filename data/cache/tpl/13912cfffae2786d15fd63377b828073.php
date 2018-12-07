<?php exit;?>001572331578dc213e5b63996127365e4ae9156337a3s:7685:"a:2:{s:8:"template";s:7621:"<?php $__Template->display("themes/default/head"); ?>

<section class="class-list am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="class-container">
            <img src="/assets/image/142.png" class="am-img-responsive" alt="<?php echo $vo["name"];?>" />
            <!--850*434-->

            <article class="class-suggest am-padding-left-sm">
                <div class="am-tabs" data-am-tabs="{noSwipe: 1}">
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">热门推荐</a></li>
                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">

                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"12,15,16,17", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </article>
        </div>

    </div>
</section>

<main class="class-categories am-padding-bottom-xl">
    <div class="am-container">
        <article>
            <div class="category-top">
                <div class="left">
                    <a href="/list-zuanshiketang.html">钻石课堂</a>
                    <ul class="am-avg-sm-4">
                        <li><a href="/zuanshiketang/select/classes-1.html?class_id=12">钻石新闻</a></li>
                        <li><a href="/zuanshiketang/select/classes-2.html?class_id=12">钻石知识</a></li>
                        <li><a href="/zuanshiketang/select/classes-3.html?class_id=12">彩钻新闻</a></li>
                        <li><a href="/zuanshiketang/select/classes-4.html?class_id=12">品牌大全</a></li>
                    </ul>
                </div>
                <a href="/list-zuanshiketang.html">more >></a>
            </div>

            <ul class="am-avg-sm-4 category-product-show am-padding-top-sm am-padding-bottom-lg">
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>12, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li class="am-padding-top-xs">
                    <a href="<?php echo $list["aurl"];?>" style="background-image: url(<?php echo $list["image"];?>);">
                        <p><?php echo $list["title"];?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </article>

        <article>
            <div class="category-top">
                <div class="left">
                    <a href="/list-jiezhiketang.html">戒指课堂</a>
                    <ul class="am-avg-sm-4">
                        <li><a href="/jiezhiketang/select/ringClass-1.html?class_id=15">戒指佩戴</a></li>
                        <li><a href="/jiezhiketang/select/ringClass-2.html?class_id=15">铂金戒指</a></li>
                        <li><a href="/jiezhiketang/select/ringClass-3.html?class_id=15">情侣对戒</a></li>
                        <li><a href="/jiezhiketang/select/ringClass-4.html?class_id=15">婚戒知识</a></li>
                    </ul>
                </div>
                <a href="/list-jiezhiketang.html">more >></a>
            </div>

            <ul class="am-avg-sm-4 category-product-show am-padding-top-sm am-padding-bottom-lg">
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>15, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li class="am-padding-top-xs">
                    <a href="<?php echo $list["aurl"];?>" style="background-image: url(<?php echo $list["image"];?>);">
                        <p><?php echo $list["title"];?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </article>

        <article>
            <div class="category-top">
                <div class="left">
                    <a href="/list-zhubaoketang.html">珠宝课堂</a>
                    <ul class="am-avg-sm-4">
                        <li><a href="/zhubaoketang/select/zhubao-1.html?class_id=16">珠宝百科</a></li>
                        <li><a href="/zhubaoketang/select/zhubao-2.html?class_id=16"">珠宝价值</a></li>
                        <li><a href="/zhubaoketang/select/zhubao-3.html?class_id=16">珠宝保养</a></li>
                        <li><a href="/zhubaoketang/select/zhubao-3.html?class_id=16">珠宝首饰</a></li>
                    </ul>
                </div>
                <a href="/list-zhubaoketang.html">more >></a>
            </div>

            <ul class="am-avg-sm-4 category-product-show am-padding-top-sm am-padding-bottom-lg">
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>16, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li class="am-padding-top-xs">
                    <a href="<?php echo $list["aurl"];?>" style="background-image: url(<?php echo $list["image"];?>);">
                        <p><?php echo $list["title"];?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </article>

        <article>
            <div class="category-top">
                <div class="left">
                    <a href="/list-jiehunbaike.html">结婚百科</a>
                    <ul class="am-avg-sm-4">
                        <li><a href="/jiehunbaike/select/marriageWiki-1.html?class_id=17">婚礼策划</a></li>
                        <li><a href="/jiehunbaike/select/marriageWiki-2.html?class_id=17">婚纱摄影</a></li>
                        <li><a href="/jiehunbaike/select/marriageWiki-3.html?class_id=17">蜜月旅行</a></li>
                        <li><a href="/jiehunbaike/select/marriageWiki-4.html?class_id=17">结婚礼物</a></li>
                    </ul>
                </div>
                <a href="/list-jiehunbaike.html">more >></a>
            </div>

            <ul class="am-avg-sm-4 category-product-show am-padding-top-sm">
                <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>17, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
                <li class="am-padding-top-xs">
                    <a href="<?php echo $list["aurl"];?>" style="background-image: url(<?php echo $list["image"];?>);">
                        <p><?php echo $list["title"];?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </article>
    </div>
</main>


<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1540795578;}";