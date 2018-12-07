<?php exit;?>0015723317291520b4295a3b6a6a87696d431fa3a9eas:6971:"a:2:{s:8:"template";s:6907:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="class-list-top am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <img src="/assets/image/142.png" class="am-img-responsive" alt="<?php echo $vo["name"];?>" />

</section>

<hr class="grey" />

<main class="class-categories am-padding-horizontal-sm am-padding-top-sm">

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
            <a href="/list-zuanshiketang.html" class="am-text-xs">more</a>
        </div>



        <div class="category-product-show">
            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>12, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="am-margin-vertical-xs">
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                <div>
                    <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>
            <?php } ?>
        </div>


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
            <a href="/list-jiezhiketang.html" class="am-text-xs">more</a>
        </div>



        <div class="category-product-show">
            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>15, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="am-margin-vertical-xs">
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                <div>
                    <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>
            <?php } ?>
        </div>


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
            <a href="/list-zhubaoketang.html" class="am-text-xs">more</a>
        </div>

        <div class="category-product-show">
            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>16, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="am-margin-vertical-xs">
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                <div>
                    <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>
            <?php } ?>
        </div>


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
            <a href="/list-jiehunbaike.html" class="am-text-xs">more</a>
        </div>



        <div class="category-product-show">
            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>17, "sub"=>true, "limit"=>4));  if(is_array($listList)) foreach($listList as $list){ ?>
            <a href="<?php echo $list["aurl"];?>" class="am-margin-vertical-xs">
                <img src="<?php echo $list["image"];?>" alt="<?php echo $list["title"];?>" class="am-img-responsive" />
                <div>
                    <p class="am-margin-vertical-0 am-text-sm am-text-truncate"><?php echo $list["title"];?></p>
                    <p class="am-margin-vertical-0 am-text-xs am-text-truncate"><?php echo $list["description"];?></p>
                </div>
            </a>
            <?php } ?>
        </div>


    </article>

</main>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>";s:12:"compile_time";i:1540795729;}";